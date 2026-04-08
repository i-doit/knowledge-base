const puppeteer = require('puppeteer-core');
const fs = require('fs');
const CATS = [
  { name: 's-router',              catID: 17,  viewMode: 1100, obj: 305 },
  { name: 's-cell-phone-contract', catID: 23,  viewMode: 1100, obj: 800 },
  { name: 's-person-group',        catID: 52,  viewMode: 1100, obj: 10 },
  { name: 's-person-group-master', catID: 53,  viewMode: 1100, obj: 10 },
  { name: 's-pdu',                 catID: 64,  viewMode: 1100, obj: 193 },
  { name: 's-chassis-view',        catID: 87,  viewMode: 1100, obj: 556 },
];
const OUT = '/root/projekte/12_kb-idoit/knowledge-base/overrides/assets/images/de/grundlagen/kategorien';
(async () => {
  const browser = await puppeteer.launch({executablePath:'/usr/bin/google-chrome',headless:'new',args:['--no-sandbox','--disable-setuid-sandbox','--disable-gpu']});
  const page = await browser.newPage();
  await page.setViewport({width:1100,height:900});
  await page.goto('http://192.168.179.31:9001/?lang=de',{waitUntil:'networkidle2',timeout:20000});
  await page.type('#login_username','admin');
  await page.type('#login_password','admin');
  await page.click('#login_submit');
  await new Promise(r=>setTimeout(r,3000));
  console.log('Login OK');
  for (const cat of CATS) {
    try {
      await page.goto(`http://192.168.179.31:9001/?objID=${cat.obj}&catgID=${cat.catID}&viewMode=${cat.viewMode}&lang=de`,{waitUntil:'networkidle2',timeout:15000});
      await new Promise(r=>setTimeout(r,2000));
      await page.addStyleTag({content:'#top,#menuTreeOn,#draggableBar,#infoBox{display:none!important}'});
      await new Promise(r=>setTimeout(r,300));
      const dims = await page.evaluate(()=>{const el=document.querySelector('#contentArea');if(!el)return null;const r=el.getBoundingClientRect();let b=r.top+80;el.querySelectorAll('table tr,.contentBox,p,h1,h2,h3,label,.description,td,th,input,select,textarea').forEach(e=>{if(e.offsetParent!==null){const bb=e.getBoundingClientRect().bottom;if(bb>b&&bb<5000)b=bb}});return{x:Math.round(r.left),w:Math.round(r.width),bottom:Math.round(b+25)}});
      if(!dims){console.log(`SKIP ${cat.name}`);continue}
      await page.setViewport({width:1100,height:dims.bottom+50});
      await new Promise(r=>setTimeout(r,200));
      fs.writeFileSync(`${OUT}/${cat.name}_raw.png`,await page.screenshot({clip:{x:dims.x,y:0,width:dims.w,height:dims.bottom}}));
      fs.copyFileSync(`${OUT}/${cat.name}_raw.png`,`${OUT}/${cat.name}.png`);
      console.log(`OK: ${cat.name} (${dims.w}x${dims.bottom})`);
      await page.setViewport({width:1100,height:900});
    } catch(e){console.log(`FAIL: ${cat.name} ${e.message.substring(0,50)}`)}
  }
  await browser.close();
  console.log('Done');
})().catch(e=>console.error(e));

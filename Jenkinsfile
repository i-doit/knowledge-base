pipeline {
    agent any
    environment {
        USER_ID = """${sh(
                returnStdout: true,
                script: 'id -u'
            ).trim()}"""
        GROUP_ID = """${sh(
                returnStdout: true,
                script: 'id -g'
            ).trim()}"""
    }
    stages {
        stage('Pre-build') {
            steps {
                bitbucketStatusNotify(buildState: 'INPROGRESS')
                sh("docker-compose \
                    -f docker-compose-ci.yml \
                    build \
                    --pull \
                    --build-arg USER_ID=${env.USER_ID} \
                    --build-arg GROUP_ID=${env.GROUP_ID} \
                ")
            }
        }
        stage('Install') {
            steps {
                sh('docker-compose -f docker-compose-ci.yml run docs npm install')
            }
        }
        stage('Build') {
            steps {
                sh('docker-compose -f docker-compose-ci.yml run docs npm run docs:build')
            }
        }
        stage('Deploy') {
            steps {
                sh('scp -r site/* kb.i-doit.com:/var/www/docs')
            }
        }
    }
    post {
        always {
            deleteDir()
        }
        failure {
            slackSend(channel: '#jenkins', color: 'danger', message: "FAILED - ${env.BUILD_URL}")
        }
        unstable {
            slackSend(channel: '#jenkins', color: 'warning', message: "UNSTABLE - ${env.BUILD_URL}")
        }
        aborted {
            slackSend(channel: '#jenkins', color: 'danger', message: "ABORTED - ${env.BUILD_URL}")
        }
        fixed {
            slackSend(channel: '#jenkins', color: 'good', message: "BACK TO NORMAL - ${env.BUILD_URL}")
        }
    }
}

pipeline {
  agent any

  environment {
    IMAGE_NAME = 'kylasalsa/kelaweb'
    REGISTRY = 'https://index.docker.io/v1/'
    REGISTRY_CREDENTIALS = 'dockerhub-credentials'
  }

  stages {
    stage('Install Dependencies') {
      steps {
        bat 'echo Installing dependencies...'
        bat 'npm install'
      }
    }

    stage('Build Docker Image') {
      steps {
        bat 'docker build -t %IMAGE_NAME%:%BUILD_NUMBER% .'
      }
    }

    stage('Deploy with Docker Compose') {
      steps {
        bat 'docker-compose up -d'
      }
    }
  }

  post {
    always {
      echo '✅ Pipeline selesai — Build dan Deploy dengan Docker di Windows 🚀'
    }
  }
}

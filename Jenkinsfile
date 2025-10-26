pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Install Dependencies') {
            steps {
                sh '''
                docker run --rm -v $(pwd):/app -w /app composer:2 \
                    composer install --no-interaction --prefer-dist --optimize-autoloader
                '''
            }
        }

        stage('Build Docker Image') {
            steps {
                sh 'docker build -t laravel-portfolio-app .'
            }
        }

        stage('Deploy with Docker Compose') {
            steps {
                sh '''
                docker compose down || true
                docker compose up -d --build
                '''
            }
        }
    }

    post {
        success {
            echo '✅ Build dan Deploy Berhasil! Laravel Portfolio kamu sudah jalan.'
        }
        failure {
            echo '❌ Build gagal, cek log error di atas.'
        }
    }
}

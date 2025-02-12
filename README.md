# QuickPark

QuickPark is a parking registration system that allows users to register their vehicles and park them in a parking lot. The system is designed to be user-friendly and easy to use, with a simple interface that allows users to quickly register their vehicles and park them in the lot.

## Requirements
- [Docker Desktop](https://www.docker.com/products/docker-desktop)
- [PHP](https://www.php.net/)
- [Composer](https://getcomposer.org/)

## Installation and Setup
1. Clone the repository
```bash
git clone https://github.com/DevShaded/quickpark.git
```
2. Change directory to the project folder
```bash
cd quickpark
```
3. Install dependencies
```bash
composer install
```
4. Copy the `.env.example` file to `.env`
```bash
cp .env.example .env
```
5. Generate application key
```bash
./vendor/bin/sail artisan key:generate
```
6. Build the application with Docker and Sail
```bash
./vendor/bin/sail up -d
```
7. Run the database migrations and seeder (seeder is optional)
```bash
./vendor/bin/sail artisan migrate --seed
```
8. Build the frontend assets
```bash
./vendor/bin/sail npm install && ./vendor/bin/sail npm run build
```
9. Run the ssr server in another terminal session
```bash
./vendor/bin/sail node ./bootstrap/ssr/ssr.js
```
10. Run the queue worker in another terminal session
```bash
./vendor/bin/sail artisan queue:work
```
11. Visit the application in your browser at `http://localhost`

## Usage
- Register a new license number from a car on the front page. License numbers are in the format `AB 12345`.
- After submitting the form, you will assigned a parking spot number that will be shown in a green box under the form.
- The registration of the license number and the parking slot will be removed after 2 hours automatically if the queue worker is running.

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Demo of the Application
[QuickPark Demo](https://youtu.be/QKAnhWUiX78)

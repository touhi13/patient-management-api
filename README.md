# Event Reminder App

This is a simple Event Reminder App developed using Laravel. It allows users to create, update, delete, and view event reminders. The app also supports sending reminder emails to specified recipients.

## Installation

1. Clone the repository to your local machine:

```bash
git clone https://github.com/touhi13/patient-management-api.git
```

2. Navigate to the project directory:

```bash
cd patient-management-api
```

3. Install composer dependencies:

```bash
composer install
```

4. Copy the `.env.example` file and rename it to `.env`:

```bash
cp .env.example .env
```

5. Generate an application key:

```bash
php artisan key:generate
```

6. Configure your database in the `.env` file:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

7. Run migrations to create database tables

```bash
php artisan migrate
```

8. Generate a JWT secret key for API authentication:

```bash
php artisan jwt:secret
```

## Usage

1. Start the Laravel development server:

```bash
php artisan serve
```
2. Access the application in your web browser at `http://127.0.0.1:8000`.

3. Register a new account or log in with existing credentials.

4. Create, update, delete, view patient as needed.


## Contributing

Contributions are welcome! Please feel free to submit any issues or pull requests.

## License

This project is open-source and available under the [MIT License](LICENSE).
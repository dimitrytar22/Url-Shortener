# URL Shortener

This is a Laravel-based URL shortening service. The application provides both a user-friendly web interface.

## Features

- **Web Interface**:
    - Shorten URLs through a clean and simple interface.
    - View and manage your previously shortened URLs.
    - Track click statistics for each shortened URL.

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/dimitrytar22/Url-Shortener.git
   cd Url-Shortener
   ```

2. Install dependencies:

   ```bash
   composer install
   npm install && npm run dev
   ```

3. Set up environment variables:

   ```bash
   cp .env.example .env
   ```
   Update the `.env` file with your database credentials and other necessary settings.

4. Run migrations:

   ```bash
   php artisan migrate
   ```

5. Start the server:

   ```bash
   php artisan serve
   ```

Access the application at `http://localhost:8000`.

---

## License

This project is licensed under the [MIT License](LICENSE).

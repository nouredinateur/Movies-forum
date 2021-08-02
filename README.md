# Movie-forum

Movies-forum is a forum where users can discuss their favorite movies

## Installation

Clone the repo

```bash
git clone https://github.com/nnafzaoui/Movies-forum.git
```
Install all the dependencies using composer

```bash
composer install
```
Copy the example env file and make the required configuration changes in the .env file

```bash
cp .env.example .env
```
Generate a new application key

```bash
php artisan key:generate
```

Run the database migrations (Set the database connection in .env before migrating)
```bash
php artisan migrate
```

Create the symbolic link
```bash
php artisan storage:link
```

Start the local development server

```bash
php artisan serve
```
You can now access the server at http://localhost:8000


edite the role of a user to 'admin' in the database to give it admin privilages

#!/bin/bash

set -e

if [ "$DB_HOST" ]; then
    echo "Waiting for database connection..."
    until php -r "new PDO('mysql:host=$DB_HOST;dbname=$DB_NAME', '$DB_USER', '$DB_PASSWORD');" 2>/dev/null; do
        sleep 1
    done
fi

if [ "$RUN_MIGRATIONS" == "true" ]; then
    echo "Running migrations..."
    php okta migrate
    echo "Running seeders..."
    php okta db:seed
fi

exec "$@"

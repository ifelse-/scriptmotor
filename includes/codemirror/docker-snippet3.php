
version: '3'
services:
  frontend:
    build:
      context: ./frontend
    ports:
      - "80:80"

  node-backend:
    build:
      context: ./node-backend
    ports:
      - "3000:3000"

  python-backend:
    build:
      context: ./python-backend
    ports:
      - "5000:5000"

  # Add any database services here (e.g., PostgreSQL, MySQL).
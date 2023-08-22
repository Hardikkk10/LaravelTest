# Laravel_test

An attempt to write a program to import contacts from Excel Files having an extension CSV or XLSX format.

## About the project

Sai Ashirwad Informatia (SAI) provides Software Solutions and Services to Small and Medium Business Globally. SAI is implementing a Web Based Application to manage its Sales Activity. Currently, its Sales Team uses free email accounts. SAI wants to import all the Contact(s) from Excel in CSV or XLSX format.
Code a Program to import contacts from Excel Files having an extension CSV or XLSX format.
The program should demonstrate the import and export of contact data.

## Project Overview

Our project is built using the Laravel framework, a popular PHP framework known for its elegant syntax, robust features, and developer-friendly tools. This project serves as a [brief description of the project's purpose and goals].

## Features

● User Authentication
● Create a CRUD structure for the Contact Module
● Added Excel Import and Export mechanism
● Display Results with Navigation ( Go to First, Last, Previous and Next Records)
● Sorting of Results

## Getting Started

Prerequisites
Before you begin, ensure you have the following installed:

PHP : `8.2.9`
Composer : `2.5.8`
Node.js : `v20.4.0.`
MySQL : `8.0.32`

## Installation

Clone the repository:

```
$ git clone https://github.com/Hardikkk10/LaravelTest.git 
cd LaravelTest
```


Install PHP dependencies:

```
composer install
```

Install dependencies:

```
npm install
```

In this project we used Maatebsite/excel library to import and export the CSV and Excel files, so run this command to get it for the project:

```
composer require maatwebsite/excel
```

Start the XAMPP server and connect project to your project
Copy the .env.example file to .env and configure your environment settings:

`cp .env.example .env`

Run database migrations:

```
php artisan migrate
```

Start the development server:

```
php artisan serve
```

## Configuration

Environment Variables: Update the .env file to configure your application's settings, including database connection, mail configuration, and more.




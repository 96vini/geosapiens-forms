# GeoSapiens Forms Installation Guide

This guide will walk you through the steps to set up and run the APIATO application on your system using Docker and Laravel Sail.

---

## Prerequisites

1. **Docker**  
   Ensure Docker is installed and running on your system.  
   - [Install Docker](https://docs.docker.com/get-docker/)

2. **Composer**  
   Make sure you have Composer installed to manage PHP dependencies.  
   - [Install Composer](https://getcomposer.org/download/)

---

## Installation Steps

### Step 1: Install Composer Dependencies

Run the following command in the project directory to install all required dependencies:

`composer install`

### Step 2: Add a Sail Alias

To simplify the use of Laravel Sail commands, add the following alias to your shell configuration file:

- If you use `zsh`, edit `~/.zshrc`:
  `alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'`
- If you use `bash`, edit `~/.bashrc`:
  `alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'`

After adding the alias, reload your shell configuration:
`source ~/.zshrc # for zsh users`  
`source ~/.bashrc # for bash users`

### Step 3: Start the Application Containers

Run the following command to build and start the application containers in detached mode:

`sail up -d`

### Step 4: Update Your Hosts File

Edit your `/etc/hosts` file to add the following entry for local development:

`127.0.0.1       form.geosapiens.local`

### Step 5: Generate the Application Key

Run the command below to generate the application encryption key:

`sail artisan key:generate`

### Step 6: Run the Database Migrations

Ensure the containers are up and built, then run the migrations:

`sail artisan migrate`

### Step 7: Check cache from routes

Execute the command bellow to remove any previous cache in application:

`sail artisan route:cache`

---

## For Insomnia

Import the `GeoSapiensRequestInsomnia.yaml` file into your Insomnia workspace to access all system-related requests.

## Accessing the Application

Once the setup is complete, you can access the application in your browser at:

`form.geosapiens.local`

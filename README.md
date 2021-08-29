# Pass The Hash

## About

### First project in PHP, to be a simple blog and information site, to show as a sort of portfolio

The Team/Site name is in reference to a cryptographic and security technique known as **Passing the hash** which results in authentication to a remote server by passing the underlying NTLM hash of a users password  on a Windows Network, instead of brute forcing or cracking the hash.  

## Version

- **PHP version 7.4.22**

## Todo list

- Add classes as a base interface for DB query functions.
- Setup DB seeding for lookup tables and mock data to work with
- Add login and authentication.
- Build for blog post creation.

## Running the build locally

**To run the server locally:**

- cd into the repository,
- open a terminal, powershell, bash etc
- Run ` php -S localhost:3001 ` will start a local server
- Navigate to the link via browser

## Database Settings

### Postgres

**Dependencies:**

- pdo
- pdo_pgsql

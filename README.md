# Constructify - E-commerce Platform for Construction Materials

## Table of Contents

1. **[Project Description](#project-description)**
2. **[Project Goals](#project-goals)**
3. **[How to Use](#how-to-use)**
4. **[Technologies Used](#technologies-used)**
5. **[Future Development](#future-development)**
6. **[Contributors](#contributors)**
7. **[License](#license)**
8. **[How to Contribute](#how-to-contribute)**

## Project Description

Constructify is an e-commerce platform for construction materials. It is a full-stack web application that allows users to browse, search, and purchase construction materials. Users can create an account, add items to their cart, and checkout. Constructify also has an admin panel that allows administrators to manage products, orders, and users.

## Project Goals

- Create a full-stack web application that allows users to browse, search, and purchase construction materials.
- Implement user authentication and authorization.
- Create an admin panel that allows administrators to manage products, orders, and users.

## How to Use

1. Clone the repository:

   ```bash
   git clone https://github.com/Dzoel31/constructify.git
    ```

2. Change the directory:

   ```bash
   cd constructify
   ```

3. Install the dependencies:

   ```bash
   npm install
   ```

4. Create a `.env` file in the root directory (see `.env.example` for reference).

5. Start the server:

   ```bash
   npm run dev
   ```

6. Visit link that appears in the terminal to view the application.

## Technologies Used

- Laravel
- MySQL
- Bootstrap
- Tailwind CSS

## Future Development

- Implement a review system.
- Add a chat feature for customer support.
- Implement a recommendation system.

## Contributors

- [Muh. Alif Alfattah Riu]
- [Dzulfikri Adjmal]
- [Sudarma Yudho Prayitno]

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## How to Contribute

1. Fork the repository
2. Create a new branch (`git checkout -b feature`)
3. Commit your changes (`git commit -am '<your message>'`) refer to [Conventional Commits](https://www.conventionalcommits.org/en/v1.0.0/) and [Prefix Conventions](#prefix-commit-conventions)
4. Push to the branch (`git push origin feature`)
5. Create a new Pull Request

for the synchronization of the project, we use the following steps:

1. Clone the repository:

   ```bash
   git clone https://github.com/Dzoel31/constructify.git
    ```

2. Add the remote, call it "upstream" or anything else you want:

   ```bash
   git remote add upstream
    ```

3. Fetch all the branches of that remote into remote-tracking branches, such as upstream/master:

   ```bash
   git fetch upstream
    ```

4. Make sure that you're on your master branch:

   ```bash
   git checkout main
    ```

5. Merge the changes from upstream/main into your local master branch. This brings your main branch into sync with the upstream repository, without losing your local changes:

    ```bash
    git merge upstream/main
     ```

6. Push the changes to your GitHub repository:

    ```bash
    git push origin main
    ```

## Prefix Commit Conventions

- **feat**: A new feature
- **fix**: A bug fix
- **docs**: Documentation only changes
- **style**: Changes that do not affect the meaning of the code (white-space, formatting, missing semi-colons, etc)
- **ref**: A code change that neither fixes a bug nor adds a feature
- **test**: Adding missing tests or correcting existing tests
- **chore**: Changes to the build process or auxiliary tools and libraries such as documentation generation

example: `feat: add new feature`

<p align="center">
  <img src="https://raw.githubusercontent.com/PKief/vscode-material-icon-theme/ec559a9f6bfd399b82bb44393651661b08aaf7ba/icons/folder-markdown-open.svg" width="100" alt="project-logo">
</p>
<p align="center">
    <h1 align="center">L10-TASK-LIST</h1>
</p>
<p align="center">
    A simple application for managing task list
</p>
<p align="center">
	<img src="https://img.shields.io/github/license/gabrielsantos2000/l10-task-list?style=default&logo=opensourceinitiative&logoColor=white&color=0080ff" alt="license">
	<img src="https://img.shields.io/github/last-commit/gabrielsantos2000/l10-task-list?style=default&logo=git&logoColor=white&color=0080ff" alt="last-commit">
	<img src="https://img.shields.io/github/languages/top/gabrielsantos2000/l10-task-list?style=default&color=0080ff" alt="repo-top-language">
	<img src="https://img.shields.io/github/languages/count/gabrielsantos2000/l10-task-list?style=default&color=0080ff" alt="repo-language-count">
<p>
<p align="center">
	<!-- default option, no dependency badges. -->
</p>

<br><!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary><br>

- [📍 Overview](#-overview)
- [🧩 Features](#-features)
- [🗂️ Repository Structure](#️-repository-structure)
- [📦 Modules](#-modules)
- [🚀 Getting Started](#-getting-started)
    - [⚙️ Installation](#️-installation)
    - [🤖 Usage](#-usage)
- [🤝 Contributing](#-contributing)
- [🎗 License](#-license)
</details>
<hr>

## 📍 Overview

Small application to apply the first steps in Laravel, having the basic concepts of routes, controllers, models, eloquent, migration, factories, seeders, applying this in a simple task list CRUD.

---

## 🧩 Features

<code>► List all tasks</code>\
<code>► Create a task</code>\
<code>► Edit a task</code>\
<code>► Update a task</code>\
<code>► Delete a task</code>\
<code>► Toggle completed task</code>

---

## 🗂️ Repository Structure

```sh
└── l10-task-list/
    ├── LICENSE
    ├── README.md
    ├── app
    │   ├── Console
    │   ├── Exceptions
    │   ├── Http
    │   ├── Models
    │   └── Providers
    ├── artisan
    ├── bootstrap
    │   ├── app.php
    │   └── cache
    ├── composer.json
    ├── composer.lock
    ├── config
    │   ├── app.php
    │   ├── auth.php
    │   ├── broadcasting.php
    │   ├── cache.php
    │   ├── cors.php
    │   ├── database.php
    │   ├── filesystems.php
    │   ├── hashing.php
    │   ├── logging.php
    │   ├── mail.php
    │   ├── queue.php
    │   ├── sanctum.php
    │   ├── services.php
    │   ├── session.php
    │   └── view.php
    ├── database
    │   ├── .gitignore
    │   ├── factories
    │   ├── migrations
    │   └── seeders
    ├── docker-compose.yml
    ├── nohup.out
    ├── package.json
    ├── phpunit.xml
    ├── public
    │   ├── .htaccess
    │   ├── favicon.ico
    │   ├── index.php
    │   └── robots.txt
    ├── resources
    │   ├── css
    │   ├── js
    │   └── views
    ├── routes
    │   ├── api.php
    │   ├── channels.php
    │   ├── console.php
    │   └── web.php
    ├── storage
    │   ├── app
    │   ├── framework
    │   └── logs
    ├── tests
    │   ├── CreatesApplication.php
    │   ├── Feature
    │   ├── TestCase.php
    │   └── Unit
    └── vite.config.js
```

---

## 🚀 Getting Started

**System Requirements:**

* **PHP**: `version 8.2.12`

### ⚙️ Installation

<h4>From <code>source</code></h4>

> 1. Clone the l10-task-list repository:
>
> ```console
> $ git clone https://github.com/gabrielsantos2000/l10-task-list
> ```
>
> 2. Change to the project directory:
> ```console
> $ cd l10-task-list
> ```
>
> 3. Install the dependencies:
> ```console
> $ composer install
> ```

### 🤖 Usage

<h4>From <code>source</code></h4>

> Run docker-compose.yml using the command below:
> ```console
> $ docker compose -up
> ```

> Run l10-task-list using the command below:
> ```console
> $ php artisan serve
> ```

> Run seeds using the command below:
> ```console
> $ php artisan db:seed
> ```

---

## 🤝 Contributing

Contributions are welcome! Here are several ways you can contribute:

- **[Report Issues](https://github.com/gabrielsantos2000/l10-task-list/issues)**: Submit bugs found or log feature requests for the `l10-task-list` project.
- **[Submit Pull Requests](https://github.com/gabrielsantos2000/l10-task-list/blob/main/CONTRIBUTING.md)**: Review open PRs, and submit your own PRs.
- **[Join the Discussions](https://github.com/gabrielsantos2000/l10-task-list/discussions)**: Share your insights, provide feedback, or ask questions.

<details closed>
<summary>Contributing Guidelines</summary>

1. **Fork the Repository**: Start by forking the project repository to your github account.
2. **Clone Locally**: Clone the forked repository to your local machine using a git client.
   ```sh
   git clone https://github.com/gabrielsantos2000/l10-task-list
   ```
3. **Create a New Branch**: Always work on a new branch, giving it a descriptive name.
   ```sh
   git checkout -b new-feature-x
   ```
4. **Make Your Changes**: Develop and test your changes locally.
5. **Commit Your Changes**: Commit with a clear message describing your updates.
   ```sh
   git commit -m 'Implemented new feature x.'
   ```
6. **Push to github**: Push the changes to your forked repository.
   ```sh
   git push origin new-feature-x
   ```
7. **Submit a Pull Request**: Create a PR against the original project repository. Clearly describe the changes and their motivations.
8. **Review**: Once your PR is reviewed and approved, it will be merged into the main branch. Congratulations on your contribution!
</details>

<details closed>
<summary>Contributor Graph</summary>
<br>
<p align="center">
   <a href="https://github.com{/gabrielsantos2000/l10-task-list/}graphs/contributors">
      <img src="https://contrib.rocks/image?repo=gabrielsantos2000/l10-task-list">
   </a>
</p>
</details>

---

## 🎗 License

This project is protected under the [MIT](https://choosealicense.com/licenses/mit/) License. For more details, refer to the [LICENSE](https://choosealicense.com/licenses/) file.

---

[**Return**](#-overview)

---

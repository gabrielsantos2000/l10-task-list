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
    - [🧪 Tests](#-tests)
- [🛠 Project Roadmap](#-project-roadmap)
- [🤝 Contributing](#-contributing)
- [🎗 License](#-license)
- [🔗 Acknowledgments](#-acknowledgments)
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

## 📦 Modules

<details closed><summary>.</summary>

| File                                                                                                    | Summary                         |
| ---                                                                                                     | ---                             |
| [docker-compose.yml](https://github.com/gabrielsantos2000/l10-task-list/blob/master/docker-compose.yml) | <code>► INSERT-TEXT-HERE</code> |
| [package.json](https://github.com/gabrielsantos2000/l10-task-list/blob/master/package.json)             | <code>► INSERT-TEXT-HERE</code> |
| [vite.config.js](https://github.com/gabrielsantos2000/l10-task-list/blob/master/vite.config.js)         | <code>► INSERT-TEXT-HERE</code> |
| [composer.lock](https://github.com/gabrielsantos2000/l10-task-list/blob/master/composer.lock)           | <code>► INSERT-TEXT-HERE</code> |
| [nohup.out](https://github.com/gabrielsantos2000/l10-task-list/blob/master/nohup.out)                   | <code>► INSERT-TEXT-HERE</code> |
| [artisan](https://github.com/gabrielsantos2000/l10-task-list/blob/master/artisan)                       | <code>► INSERT-TEXT-HERE</code> |
| [composer.json](https://github.com/gabrielsantos2000/l10-task-list/blob/master/composer.json)           | <code>► INSERT-TEXT-HERE</code> |

</details>

<details closed><summary>resources.css</summary>

| File                                                                                            | Summary                         |
| ---                                                                                             | ---                             |
| [app.css](https://github.com/gabrielsantos2000/l10-task-list/blob/master/resources/css/app.css) | <code>► INSERT-TEXT-HERE</code> |

</details>

<details closed><summary>resources.views</summary>

| File                                                                                                                | Summary                         |
| ---                                                                                                                 | ---                             |
| [index.blade.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/resources/views/index.blade.php)   | <code>► INSERT-TEXT-HERE</code> |
| [form.blade.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/resources/views/form.blade.php)     | <code>► INSERT-TEXT-HERE</code> |
| [create.blade.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/resources/views/create.blade.php) | <code>► INSERT-TEXT-HERE</code> |
| [show.blade.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/resources/views/show.blade.php)     | <code>► INSERT-TEXT-HERE</code> |
| [edit.blade.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/resources/views/edit.blade.php)     | <code>► INSERT-TEXT-HERE</code> |

</details>

<details closed><summary>resources.views.layouts</summary>

| File                                                                                                                  | Summary                         |
| ---                                                                                                                   | ---                             |
| [app.blade.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/resources/views/layouts/app.blade.php) | <code>► INSERT-TEXT-HERE</code> |

</details>

<details closed><summary>resources.js</summary>

| File                                                                                                     | Summary                         |
| ---                                                                                                      | ---                             |
| [app.js](https://github.com/gabrielsantos2000/l10-task-list/blob/master/resources/js/app.js)             | <code>► INSERT-TEXT-HERE</code> |
| [bootstrap.js](https://github.com/gabrielsantos2000/l10-task-list/blob/master/resources/js/bootstrap.js) | <code>► INSERT-TEXT-HERE</code> |

</details>

<details closed><summary>database.migrations</summary>

| File                                                                                                                                                                                                      | Summary                         |
| ---                                                                                                                                                                                                       | ---                             |
| [2014_10_12_000000_create_users_table.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/database/migrations/2014_10_12_000000_create_users_table.php)                                   | <code>► INSERT-TEXT-HERE</code> |
| [2019_08_19_000000_create_failed_jobs_table.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/database/migrations/2019_08_19_000000_create_failed_jobs_table.php)                       | <code>► INSERT-TEXT-HERE</code> |
| [2019_12_14_000001_create_personal_access_tokens_table.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/database/migrations/2019_12_14_000001_create_personal_access_tokens_table.php) | <code>► INSERT-TEXT-HERE</code> |
| [2014_10_12_100000_create_password_reset_tokens_table.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/database/migrations/2014_10_12_100000_create_password_reset_tokens_table.php)   | <code>► INSERT-TEXT-HERE</code> |
| [2024_01_23_145553_create_tasks_table.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/database/migrations/2024_01_23_145553_create_tasks_table.php)                                   | <code>► INSERT-TEXT-HERE</code> |

</details>

<details closed><summary>database.seeders</summary>

| File                                                                                                                     | Summary                         |
| ---                                                                                                                      | ---                             |
| [DatabaseSeeder.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/database/seeders/DatabaseSeeder.php) | <code>► INSERT-TEXT-HERE</code> |

</details>

<details closed><summary>database.factories</summary>

| File                                                                                                                 | Summary                         |
| ---                                                                                                                  | ---                             |
| [UserFactory.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/database/factories/UserFactory.php) | <code>► INSERT-TEXT-HERE</code> |
| [TaskFactory.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/database/factories/TaskFactory.php) | <code>► INSERT-TEXT-HERE</code> |

</details>

<details closed><summary>routes</summary>

| File                                                                                               | Summary                         |
| ---                                                                                                | ---                             |
| [api.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/routes/api.php)           | <code>► INSERT-TEXT-HERE</code> |
| [console.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/routes/console.php)   | <code>► INSERT-TEXT-HERE</code> |
| [channels.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/routes/channels.php) | <code>► INSERT-TEXT-HERE</code> |
| [web.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/routes/web.php)           | <code>► INSERT-TEXT-HERE</code> |

</details>

<details closed><summary>public</summary>

| File                                                                                           | Summary                         |
| ---                                                                                            | ---                             |
| [index.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/public/index.php)   | <code>► INSERT-TEXT-HERE</code> |
| [.htaccess](https://github.com/gabrielsantos2000/l10-task-list/blob/master/public/.htaccess)   | <code>► INSERT-TEXT-HERE</code> |
| [robots.txt](https://github.com/gabrielsantos2000/l10-task-list/blob/master/public/robots.txt) | <code>► INSERT-TEXT-HERE</code> |

</details>

<details closed><summary>bootstrap</summary>

| File                                                                                        | Summary                         |
| ---                                                                                         | ---                             |
| [app.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/bootstrap/app.php) | <code>► INSERT-TEXT-HERE</code> |

</details>

<details closed><summary>config</summary>

| File                                                                                                       | Summary                         |
| ---                                                                                                        | ---                             |
| [sanctum.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/config/sanctum.php)           | <code>► INSERT-TEXT-HERE</code> |
| [auth.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/config/auth.php)                 | <code>► INSERT-TEXT-HERE</code> |
| [view.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/config/view.php)                 | <code>► INSERT-TEXT-HERE</code> |
| [cache.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/config/cache.php)               | <code>► INSERT-TEXT-HERE</code> |
| [queue.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/config/queue.php)               | <code>► INSERT-TEXT-HERE</code> |
| [hashing.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/config/hashing.php)           | <code>► INSERT-TEXT-HERE</code> |
| [logging.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/config/logging.php)           | <code>► INSERT-TEXT-HERE</code> |
| [services.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/config/services.php)         | <code>► INSERT-TEXT-HERE</code> |
| [mail.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/config/mail.php)                 | <code>► INSERT-TEXT-HERE</code> |
| [filesystems.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/config/filesystems.php)   | <code>► INSERT-TEXT-HERE</code> |
| [session.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/config/session.php)           | <code>► INSERT-TEXT-HERE</code> |
| [cors.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/config/cors.php)                 | <code>► INSERT-TEXT-HERE</code> |
| [database.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/config/database.php)         | <code>► INSERT-TEXT-HERE</code> |
| [app.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/config/app.php)                   | <code>► INSERT-TEXT-HERE</code> |
| [broadcasting.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/config/broadcasting.php) | <code>► INSERT-TEXT-HERE</code> |

</details>

<details closed><summary>app.Providers</summary>

| File                                                                                                                                      | Summary                         |
| ---                                                                                                                                       | ---                             |
| [EventServiceProvider.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/app/Providers/EventServiceProvider.php)         | <code>► INSERT-TEXT-HERE</code> |
| [AppServiceProvider.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/app/Providers/AppServiceProvider.php)             | <code>► INSERT-TEXT-HERE</code> |
| [RouteServiceProvider.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/app/Providers/RouteServiceProvider.php)         | <code>► INSERT-TEXT-HERE</code> |
| [BroadcastServiceProvider.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/app/Providers/BroadcastServiceProvider.php) | <code>► INSERT-TEXT-HERE</code> |
| [AuthServiceProvider.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/app/Providers/AuthServiceProvider.php)           | <code>► INSERT-TEXT-HERE</code> |

</details>

<details closed><summary>app.Models</summary>

| File                                                                                           | Summary                         |
| ---                                                                                            | ---                             |
| [User.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/app/Models/User.php) | <code>► INSERT-TEXT-HERE</code> |
| [Task.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/app/Models/Task.php) | <code>► INSERT-TEXT-HERE</code> |

</details>

<details closed><summary>app.Http</summary>

| File                                                                                             | Summary                         |
| ---                                                                                              | ---                             |
| [Kernel.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/app/Http/Kernel.php) | <code>► INSERT-TEXT-HERE</code> |

</details>

<details closed><summary>app.Http.Middleware</summary>

| File                                                                                                                                                            | Summary                         |
| ---                                                                                                                                                             | ---                             |
| [TrimStrings.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/app/Http/Middleware/TrimStrings.php)                                           | <code>► INSERT-TEXT-HERE</code> |
| [VerifyCsrfToken.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/app/Http/Middleware/VerifyCsrfToken.php)                                   | <code>► INSERT-TEXT-HERE</code> |
| [Authenticate.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/app/Http/Middleware/Authenticate.php)                                         | <code>► INSERT-TEXT-HERE</code> |
| [TrustHosts.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/app/Http/Middleware/TrustHosts.php)                                             | <code>► INSERT-TEXT-HERE</code> |
| [EncryptCookies.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/app/Http/Middleware/EncryptCookies.php)                                     | <code>► INSERT-TEXT-HERE</code> |
| [PreventRequestsDuringMaintenance.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/app/Http/Middleware/PreventRequestsDuringMaintenance.php) | <code>► INSERT-TEXT-HERE</code> |
| [ValidateSignature.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/app/Http/Middleware/ValidateSignature.php)                               | <code>► INSERT-TEXT-HERE</code> |
| [RedirectIfAuthenticated.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/app/Http/Middleware/RedirectIfAuthenticated.php)                   | <code>► INSERT-TEXT-HERE</code> |
| [TrustProxies.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/app/Http/Middleware/TrustProxies.php)                                         | <code>► INSERT-TEXT-HERE</code> |

</details>

<details closed><summary>app.Http.Requests</summary>

| File                                                                                                                | Summary                         |
| ---                                                                                                                 | ---                             |
| [TaskRequest.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/app/Http/Requests/TaskRequest.php) | <code>► INSERT-TEXT-HERE</code> |

</details>

<details closed><summary>app.Http.Controllers</summary>

| File                                                                                                                         | Summary                         |
| ---                                                                                                                          | ---                             |
| [TaskController.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/app/Http/Controllers/TaskController.php) | <code>► INSERT-TEXT-HERE</code> |
| [Controller.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/app/Http/Controllers/Controller.php)         | <code>► INSERT-TEXT-HERE</code> |

</details>

<details closed><summary>app.Console</summary>

| File                                                                                                | Summary                         |
| ---                                                                                                 | ---                             |
| [Kernel.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/app/Console/Kernel.php) | <code>► INSERT-TEXT-HERE</code> |

</details>

<details closed><summary>app.Exceptions</summary>

| File                                                                                                     | Summary                         |
| ---                                                                                                      | ---                             |
| [Handler.php](https://github.com/gabrielsantos2000/l10-task-list/blob/master/app/Exceptions/Handler.php) | <code>► INSERT-TEXT-HERE</code> |

</details>

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

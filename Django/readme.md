# Laravel

Django is a high-level Python Web framework that encourages rapid development and clean, pragmatic design. Built by experienced developers, it takes care of much of the hassle of Web development, so you can focus on writing your app without needing to reinvent the wheel. It’s free and open source.

## Benefits

* **Speed:** Django was designed to help developers take applications from concept to completion as quickly as possible.

* **Security:** Django takes security seriously and helps developers avoid many common security mistakes.

* **Scalability:** Some of the busiest sites on the Web leverage Django’s ability to quickly and flexibly scale.


---

## Getting started with Django

To get started with Django, I prefer using a pip environment. The main advantage with pipenv is the creation of a pip file. The pip file allows for easy installation of the application across multiple systems by simply installing the pipfile. Here is how to get pipenv and start a Django project:

```console
foo@bar:~$ pip install pipenv
foo@bar:~$ pipenv shell
bash-3.2$ pipenv install django
bash-3.2$ django-admin startproject ProjectName
bash-3.2$ cd ProjectName
```

To start a local development server to view the application, you can use the following command to create the applicaton on port 8000.

```console
bash-3.2$ python manage.py runserver
```

## Useful Django commands

1. Run Migrations.
2. Create new app called AppName.
3. Create migrations for app AppName.
4. Create a super user for the project.
5. Run a shell within the project.

```console
bash-3.2$ python manage.py migrate
bash-3.2$ python manage.py startapp AppName
bash-3.2$ python manage.py makemigrations AppName
bash-3.2$ python manage.py createsuperuser
bash-3.2$ python manage.py shell
```

## Examples of Django

Here are some examples of projects I have made with Django:

* [Django Voting App](https://github.com/CMHayden/Django-VotingApp)



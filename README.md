
<h1 align="center">Tugasweb</h1>

We'd like to apologize in advance that this was just a little project that was issued by our lecturer as an assignment on our 4th semester, as You'd expect the code would be so badly arranged, as we at the time have little to no knowledge about the subject itself.

### Original Author: Firyal224

#### Contributors
<a href="https://github.com/Firyal224/Tugasweb/graphs/contributors">
  <img src="https://contrib.rocks/image?repo=Firyal224/Tugasweb" width=100px> 
</a>

## Features
- Landing Page
- Login Form
- Admin, Employee, and Reader Authentication
- Database

## Users

||Admin|Employee (Pegawai)|
|--|--|--|
|e-mail|admin@gmail.com|admin123|
|passwd|pegawai@gmail.com|pegawai123|

## To-Do
- [ ] Visual Font Bug on Field Check ---> [This](https://user-images.githubusercontent.com/71587225/163460744-1973d8cf-7de2-43c1-9095-e1ef7b767a82.png)
- [ ] button show
- [X] Footer Top Margin Error
- [X] Bad Color Scheme


## Deploy

#### Clone the Repo
```
$ git clone https://github.com/Firyal224/Tugasweb.git
```

#### Install composer
```
$ composer install
```

#### Copy .Env
```
$ cp .env.example .env
```

#### Create Database 
```
Database Name : tugasweb
```

#### .env Settings
```bash
DB_PORT=3306
DB_DATABASE=tugasweb
DB_USERNAME=root
DB_PASSWORD=
```

#### Generate key
```
php artisan key:generate
```

#### Migrate and Seed
```
php artisan migrate --seed
```

#### Storage Link
```
php artisan storage:link
```

#### Serve on Artisan
```
php artisan serve
```

## License

- Copyright © 2022 Firyal

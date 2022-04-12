# Third Party API Tutorial

## What the movie database does: 

It provides a free API portal for people who want access to movie and TV data. It is community built and contains data on movies, TV shows, people, posters, and fanart. Within movies, information such as release dates, similar movies, recommendations, ratings, videos, and images can be accessed. 

## How to obtain API key:

Create an account and click on the avatar

Click on settings 

On the left, click API

Under the section "Request an API Key", click the link

## How to use it:

On the left side of the API documentation, there are different categories including keywords, movies, people, search, tv, watch providers, and more depending on what data is needed. When they are clicked on, it gives a description of what the request does as well as the URL for the request.

When making a request, it begins with "https://api.themoviedb.org/3" followed by what type of request is being made (this part of the URL is given in the documentation). When a specific movie, etc is being referenced, it will include an area for the id (ex: /movie/{movie_id}). This is followed by a "?" and then by the api key "api_key=env('YELP_API_KEY')". For example, the request for the keywords of a specific movie would be "https://api.themoviedb.org/3/movie/{movie_id}/keywords?api_key=env('YELP_API_KEY')". Overall, the documentation is very self-explanatory and easy to use.

## Code Examples:

Route:
'''
Route::get('/api', function () {
    $response = Http::get('https://api.themoviedb.org/3/movie/101?api_key=env('YELP_API_KEY')&language=en-US');

    return view('api.moviedb', [
        'response' => $response->object(),
    ]);
});
'''

Data:
'''
<h1>Title : {{$response->original_title}}</h1>

<h2>Overview</h2>
<p>
    {{$response->overview}}
</p>

<h2>Genres</h2>
<ul>
    @foreach ($response->genres as $genre)
        <li>
            {{$genre->name}}
        </li>
    @endforeach
</ul>
'''




<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

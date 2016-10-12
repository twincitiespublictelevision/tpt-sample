# tpt-sample
The sample project is based on the [Lumen Framework](https://lumen.laravel.com). Lumen is a paired-down version of the larger [Laravel Framework](https://laravel.com). The [Lumen Documentation](https://lumen.laravel.com/docs/5.3) covers the needed information for working on this project.

## Setup
1. Clone the tpt-sample repo
2. Add the following record to the computers host file:
    ```
    199.167.77.39   dev-api.tpt.org
    ```
3. Update local server settings to point to the /public directory

## Schedule API Information
There is a single endpoint of the schedule API that is of interest:

### POST `/schedule/series`
```
Gets the next upcoming airing of a series on a channel. Expects JSON post data.
{
  "title":STRING,
  "channel":STRING
}
```

For the purposes of this project, we will be using the "2" channel.
Some sample series names that you can use are:
* Almanac
* Nova
* Nature

A sample request to the API may look like:
````
POST http://dev-api.tpt.org/schedule/series
Content-Type: application/json

{"title": "Almanac", "channel": "2"}
```
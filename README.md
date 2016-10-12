# tpt-sample
The sample project is based on the [Lumen Framework](https://lumen.laravel.com). Lumen is a paired-down version of the larger [Laravel Framework](https://laravel.com). The [Lumen Documentation](https://lumen.laravel.com/docs/5.3) covers the needed information for working on this project.

## Setup
1. Clone the tpt-sample repo
2. Add the following record to the computers host file:
    ```
    199.167.77.39   dev-api.tpt.org
    ```
3. Update local server settings to point to the /public directory

## Project Structure
There are three main areas that are of interest.
* routes/web.php - Routes defines the available endpoints that are exposed by the application
* app/Http/Controllers - Controllers contains the controllers invoked by the routes
* public - Public contains the files that are served to the end user
* resources/views - Views contains the html files that are sent to the user 

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
```
POST http://dev-api.tpt.org/schedule/series
Content-Type: application/json

{"title": "Almanac", "channel": "2"}
```

A response from this request would look something like:
```
[
    {
        "id": 10650868,
        "ingest_id": 1024,
        "series_id": 1,
        "episode_id": 12369,
        "schedule_channel": "2",
        "schedule_start_time": "2016-10-14 19:00:00",
        "schedule_end_time": "2016-10-14 19:56:40",
        "schedule_duration_hour": 0,
        "schedule_duration_minute": 56,
        "schedule_duration_second": 40,
        "updated_at": "2016-08-29 16:29:52",
        "created_at": "2016-08-29 16:28:23",
        "series": {
            "id": 1,
            "wp_posts_id": 31501,
            "series_id": 4875,
            "series_code": "ALMC",
            "series_title": "Almanac",
            "series_desc": "Almanac is a weekly news and public affairs program produced by tpt and seen statewide.  Now in its 32nd season, Almanac is the longest-running primetime TV program in Minnesota history.  Almanac is hosted by Cathy Wurzer and Eric Eskola.  Mary Lahammer contributes political reporting on a weekly basis.",
            "series_url": "http://www.tpt.org/almanac",
            "updated_at": "2016-08-29 16:27:59",
            "created_at": "2015-09-22 13:37:47"
        },
        "episode": {
            "id": 12369,
            "series_id": 1,
            "program_id": 289901,
            "version_id": 327416,
            "episode_number": 3307,
            "episode_title": "",
            "episode_desc": "",
            "episode_url": "",
            "episode_language": "English",
            "episode_dvi": "NO",
            "episode_stereo": "STEREO",
            "episode_hdtv": "YES",
            "version_rating": "",
            "version_caption": "Yes",
            "package_type": "HDBA",
            "orig_broadcast_date": "2016-10-14",
            "updated_at": "2016-08-29 16:28:03",
            "created_at": "2016-08-29 16:28:03"
        }
    }
]
```
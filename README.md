# DHL Dashboard

This is a DHL dashboard. If you are involved in many DHL packages, you will quickly find that their first-party dashboard does not display all available data. Besides that, DHL has multiple dashboards, which makes it quite confusing.

This is a quick and simple tool to keep track of your DHL packages. It uses SQLite, making it extremely lightweight. I also added basic HTTP authentication so that your data is protected. The only things you need to configure in your `.env` file are:

-Username for the basic HTTP authentication
BASIC_AUTH_USERNAME=

-Password for the basic HTTP authentication
BASIC_AUTH_PASSWORD=

-Base DHL URL of your preferred dashboard
DHL_URL=https://my.dhlecommerce.nl/home/tracktrace/

Created by Bilal Kerkeni
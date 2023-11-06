Plugin to creating portfolio
==========


This plugin allows to create so sections as educations, work expiriences, projects, skills, technologies and user information.

This plugin get you data for any section by means of components.

Plugin supports multisite.

You are allows next components technologies, educations, experiences, skills, projects.
All components have method items for getting all section items.


````
{% for post in educations.items %}
    {{ post }}
{% endfor %}
````

For getting user information supports array "settings"  with next keys: birthday, country, city, email, phone, resume_file, avatar, about, socials.

````
{{ settings.country }}
````

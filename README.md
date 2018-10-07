# Is it hot in here or it's just me?
## A visualization about Global Warming

Global warming refers to the upward temperature trend across the entire Earth since the early 20th century, and most notably since the late 1970s, due to the increase in fossil fuel emissions since the industrial revolution. Worldwide since 1880, the average surface temperature has gone up by about 0.8 °C (1.4 °F), relative to the mid-20th-century baseline (of 1951-1980). [(NASA)](https://climate.nasa.gov/resources/global-warming/)

This visualization is part of an activity for the [Visual Analytics class - Uniandes 2018-20](http://johnguerra.co/classes/visual_analytics_fall_2018/). Data was taken from [NASA's GISTEMP](https://data.giss.nasa.gov/gistemp/) site and preprocessed with "preprocess.php" and "preprocess-season.php" to create a json file to work with. The graphics present the temperature anomalies since 1880 to present by year-month and by season.

Graphics are interactive, hover the mouse over the dots to display more information and click on them to filtrate it.

## Objective
To generate an interactive visualization to present the temperature variations trend over the time since 1880 to the present that allows the user identify whether the global temperature mean is raising or not with the displayed information.

## Used Technologies
* [Vega-Lite](https://vega.github.io/vega-lite/)
* [Materialize CSS](https://materializecss.com)

## Local execution
In order to execute the visualization locally you must have a local web server installed. Fow Windows it's recommended to use [1&1](https://www.1and1.com/digitalguide/server/tools/xampp-tutorial-create-your-own-local-test-server/) tutorial, [Gestiona tu Web](https://www.gestionatuweb.net/instalar-un-servidor-web-en-linux-para-pruebas-y-aprendizaje-con-xampp/) for Linux and [MAMP](https://documentation.mamp.info/en/MAMP-Mac/First-Steps/) for macOS.

## Screenshots
![preview](/screenshot.PNG)
![preview](/screenshot2.PNG)

# About the vis
## What
Dataset Type: Table

Items: Global Means

Attributes:
1. Year (Ordered, Quantitative, Sequential)
2. Date (Temporal)
3. Season (Ordered, Ordinal, Cyclic)
4. Mean (Ordered, Quantitative, Diverging)

## Why
* Summarize global mean temperature trend from 1880 to 2018. **(Summarize - Trends)**
* Compare global mean temperature by month from 1880 to 2018. **(Compare - Features)**
* Compare seasonal mean temperatures by year from 1880 to 2018. **(Compare - Features)**
* Locate the mean temperature for a given year and month. **(Locate - Features)**

## How
**Global Mean Temperature Anomalies 1880-2018 uses:**
Mark: Lines
Channels:
* [2,4] Position/Size.
* [1] Color (saturation).


**Seasonal Mean Temperature Anomalies uses:**
Mark: Points
Channels:
* [1,4] Position.
* [3] Color (hue).


## Insights
Although it's obvious that the global temperature is raising, with the first graphic there seems to be a periodic interval cycle of about 4-6 years between the peaks in the anomalies.

The temperature raising could be related to the beginning of experimentation with fossile combustibles that started by 1920 and began its mass use by 1950 approximately.

There is a rising peak during the first world war between 1914-1918 and the first significant temperature rising is between 1936-1945 that could be related to second world war that lasted between 1939-1945.

The season with the more variation in temperature is winter, in general there are years that have the most colder and the most warmer winter. Most colder season is winter 1917 and the warmer season is winter 2016.

# Related Content
* [Visualization](https://cubosensei.github.io/va-bonus1/)
* [Slides](https://docs.google.com/presentation/d/1DJ-lzqUFOmEpsSPBdQ3JL_iuvUI01MhJJm_WfuR4TO8/edit?usp=sharing)
* [YouTube Video](https://youtu.be/HNUhd1befmI)


# Credits
* This content is published with 2018 MIT licence by [Manuel Alvarado](http://www.manalco.co).
* Data by [NASA's GISTEMP](https://data.giss.nasa.gov/gistemp/).

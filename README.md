# Is it hot in here or it's just me?
## A visualization about Global Warming

Global warming refers to the upward temperature trend across the entire Earth since the early 20th century, and most notably since the late 1970s, due to the increase in fossil fuel emissions since the industrial revolution. Worldwide since 1880, the average surface temperature has gone up by about 0.8 °C (1.4 °F), relative to the mid-20th-century baseline (of 1951-1980). [(NASA)](https://climate.nasa.gov/resources/global-warming/)

This visualization is part of an activity for the [Visual Analitics class - Uniandes 2018-20](http://johnguerra.co/classes/visual_analytics_fall_2018/). Data was taken from [NASA's GISTEMP](https://data.giss.nasa.gov/gistemp/) site and preprocessed with "preprocess.php" and "preprocess-season.php" to create a json file to work with. The graphics present the temperature anomalies since 1880 to present by year-month and by season.

Graphics are interactive, hover the mouse over the dots to display more information and click on them to filtrate it.

# Objective
To generate an interactive visualization to present the temperature variations trend over the time since 1880 to the present that allows the user identify whether the global temperature mean is raising or not with the displayed information.

# Used Technologies
* [D3](https://d3js.org/)
* [Vega-Lite](https://vega.github.io/vega-lite/)
* [Materialize CSS](https://materializecss.com)

# Local execution
In order to execute the visualization locally you must have a local web server installed. Fow Windows it's recommended to use [1&1](https://www.1and1.com/digitalguide/server/tools/xampp-tutorial-create-your-own-local-test-server/) tutorial, [Gestiona tu Web](https://www.gestionatuweb.net/instalar-un-servidor-web-en-linux-para-pruebas-y-aprendizaje-con-xampp/) for Linux and [MAMP](https://documentation.mamp.info/en/MAMP-Mac/First-Steps/) for macOS.

# Screenshots
![preview](/screenshot.png)
![preview](/screenshot2.png)

# Credits
* This content is published with 2018 MIT licence by [Manuel Alvarado](http://www.manalco.co).
* Data by [NASA's GISTEMP](https://data.giss.nasa.gov/gistemp/).

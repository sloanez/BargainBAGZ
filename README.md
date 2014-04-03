# BarTourApp

## 1 Abstract

Our project entails developing software that we intend to be must-have for those interested in getting the most out of their night life experiences in State College.  To accomplish this, we decided to develop a mobile website to reach the maximum amount of users, no matter their platform or location.  The application will include a wealth of information about downtown drinking establishments (e.g. hours, weekly events, drink and food specials) stored in an XML format.  The application will present this data in an easy to digest format.  Along with this, the user will be given the option to filter the information based on personal preference.  The backend of the page will be written in Javascript, with the frontend being written in HTML/CSS utilizing the jQuery Mobile design template.

![High level modular breakdown](https://github.com/MooresLaw/BarTourApp/raw/master/extras/ModularDiagram.png)

Figure 1: A high-level modular decomposition

## 2 Requirements
### 2.1 Background
The night life mobile webpage is being developed as a project for CMPSC 483W by students at Penn State University. The idea for this project arose due to the lack of a proper mobile experience for checking specials at the local State College bars, and developed into a project that allows for users to have a night on the town based on their own unique wants.

### 2.2 Essential Solution
The goal of the application is to provide information on the local night life establishments in a clean and organized format while also providing the user with some tools to personalize their own experience.  To do this, the application will be split into multiple tabs.  These tabs are as follows:

##### Specials Tab

Opening this tab will open a scrollable list with each nightspot in the State College area, listed in alphabetical order. Users can then select the establishment of his or her choice and a page explaining that bar’s specials will appear. Additionally, each bar’s happy hours will be posted. Users will be able to return to list of bars from this menu in case he or she decides to go somewhere else.

##### Bar Menus Tab

Similar to the bar specials tab, users will be presented with a list of bars in alphabetical order. Upon selecting a bar, users will be presented with the bar's menu.

##### Calculate Route Tab

This tab will allow the user to select the bars he or she would like to visit for a possible bar tour. Users will be given a list of bars in the State College area, and he or she will select which bars will be on the route. The application, after the user has selected all desired bars, will then calculate the optimal path from the starting point to the ending destination. We will make use of Google Maps API to calculate shortest travel distance between all selected bars and display this to the user.

##### Ratings Tab

Ratings for each bar will be pulled from Yelp and displayed to the user. If a bar does not have a rating on Yelp, nothing will be displayed.


### 2.3 Environment
The mobile website will be hosted on a PSU Personal Account for demo purposes.  The homepage for the mobile website is http://www.personal.psu.edu/gol5047/BarTourApp/index.html


### 2.4 Implementation Outline

The application will be developed in Javascript and HTML/CSS.  All bar data will be stored in XML and served to the user upon request.  The XML file is broken down into individual records for each bar.  Each record has the following fields:
- bar name
- specials for every individual day of the week
- everyday specials
- happy hour specials
- address

## 3 Technical Specifications

#### Code Standards:
######HTML:
- 4 space indentation
- Lowercase lettering on tags and attributes
- Omitting tags defined as optional in HTML5
- Utilize HTML5 functionality wherever possible
- Keep code pertaining to structure, presentation, and behavior separate from one another
- Use new line for each subelement, using indentation to represent hierarchy

######CSS:
- Use ID and Class names that reflect purpose, use generic naming otherwise
- Avoid type selectors unless necessary
- Utilize shorthand properties
- Alphabetize Declarations
- Indent blocked content

######JavaScript:
- Always do declarations with var
- For constants, name variables in all uppercase with underscores between words ex. CONST_VAL

######XML Schema:

<pre><code>&lt;Record&gt;
  &lt;Row
    bar_name="Bar Name"
    monday="Monday Specials"
    tuesday="Tuesday Specials"
    wednesday="Wednesday Specials"
    thursday="Thursday Specials"
    friday="Friday Specials"
    saturday="Saturday Specials"
    sunday="Sunday Specials"
    daily_specials="Everyday Specials"
    happy_hour="Happy Hour specials"
    address="Address"
    menu="Menu link"
    yelp="Yelp link"
  &gt;&lt;Row/&gt;
&lt;/Record&gt;</code></pre>

## 4 Test Cases
### User Interaction Cases

All user interaction tests were done on Google Chrome Version 31.0.1650.63 for OS X 10.8.5, however testing has been done on multiple devices and browsers and the website has functioned as intended.

#### Main Page
<ol>
<li> Open Google Chrome </li>
<li> Navigate to personal.psu.edu/gol5047/BarTourApp/index.html </li>
<li> The main page should display the title "State College Bar Tour", a picture of downtown State College
   at night, a bottle button in the top-left corner of the page, a home button in the top-right corner
   of the page, as well as three button options:
<ul>
   <li> Menus </li>
   <li> Specials </li>
   <li> Bar Tour Route </li>
   <li> Bar Ratings </li>
</ul></li>
<li>Click the bottle button in the top-left corner of the page.</li>
<li>The main page should be displayed again with the same URL.</li>
</ol>

---

<ol>
<li> Open Google Chrome </li>
<li> Navigate to personal.psu.edu/gol5047/BarTourApp/index.html </li>
<li> The main page should display the title "State College Bar Tour", a picture of downtown State College
   at night, a bottle button in the top-left corner of the page, a home button in the top-right corner
   of the page, as well as three button options:
<ul>
   <li> Menus </li>
   <li> Specials </li>
   <li> Bar Tour Route </li>
   <li> Bar Ratings </li>
</ul></li>
<li>Click the home button in the top-right corner of the page.</li>
<li>The main page should be displayed again with the same URL.</li>
</ol>

---

<ol>
<li> Open Google Chrome </li>
<li> Navigate to personal.psu.edu/gol5047/BarTourApp/index.html </li>
<li> The main page should display the title "State College Bar Tour", a picture of downtown State College
   at night, a bottle button in the top-left corner of the page, a home button in the top-right corner
   of the page, as well as three button options:
<ul>
   <li> Menus </li>
   <li> Specials </li>
   <li> Bar Tour Route </li>
   <li> Bar Ratings </li>
</ul></li>
<li>Click the "Menus" button.</li>
<li>The Menus page should be displayed with the URL personal.psu.edu/gol5047/BarTourApp/menus.html</li>
</ol>

---

<ol>
<li> Open Google Chrome </li>
<li> Navigate to personal.psu.edu/gol5047/BarTourApp/index.html </li>
<li> The main page should display the title "State College Bar Tour", a picture of downtown State College
   at night, a bottle button in the top-left corner of the page, a home button in the top-right corner
   of the page, as well as three button options:
<ul>
   <li> Menus </li>
   <li> Specials </li>
   <li> Bar Tour Route </li>
   <li> Bar Ratings </li>
</ul></li>
<li>Click the "Specials" button.</li>
<li>The Specials page should be displayed with the URL personal.psu.edu/gol5047/BarTourApp/specials.html</li>
</ol>

---

<ol>
<li> Open Google Chrome </li>
<li> Navigate to personal.psu.edu/gol5047/BarTourApp/index.html </li>
<li> The main page should display the title "State College Bar Tour", a picture of downtown State College
   at night, a bottle button in the top-left corner of the page, a home button in the top-right corner
   of the page, as well as three button options:
<ul>
   <li> Menus </li>
   <li> Specials </li>
   <li> Bar Tour Route </li>
   <li> Bar Ratings </li>
</ul></li>
<li>Click the "Bar Tour Route" button.</li>
<li>The Bar Tour Route page should be displayed with the URL personal.psu.edu/gol5047/BarTourApp/route.html</li>
</ol>

---

<ol>
<li> Open Google Chrome </li>
<li> Navigate to personal.psu.edu/gol5047/BarTourApp/index.html </li>
<li> The main page should display the title "State College Bar Tour", a picture of downtown State College
   at night, a bottle button in the top-left corner of the page, a home button in the top-right corner
   of the page, as well as three button options:
<ul>
   <li> Menus </li>
   <li> Specials </li>
   <li> Bar Tour Route </li>
   <li> Bar Ratings </li>
</ul></li>
<li>Click the "Bar Ratings" button.</li>
<li>The Bar Ratings page should be displayed with the URL personal.psu.edu/gol5047/BarTourApp/ratings.html</li>
</ol>

---

#### Menus Page

<ol>
<li> Open Google Chrome </li>
<li> Navigate to personal.psu.edu/gol5047/BarTourApp/menus.html </li>
<li> The menu page should display the title "Menus", a picture of downtown State College, a
   back button in the top-left corner of the page, a home button in the top-right corner
   of the page, as well as thirty button options, one for each bar in State College. </li>
<li> Click the back button in the top-left corner of the page. </li>
<li> The main page should be displayed again with the main page URL. </li>
</ol>

---

<ol>
<li> Open Google Chrome </li>
<li> Navigate to personal.psu.edu/gol5047/BarTourApp/menus.html </li>
<li> The menu page should display the title "Menus", a picture of downtown State College, a
   back button in the top-left corner of the page, a home button in the top-right corner
   of the page, as well as thirty button options, one for each bar in State College. </li>
<li> Click the menu button in the top-right corner of the page. </li>
<li> The main page should be displayed again with the main page URL. </li>
</ol>

---

<ol>
<li> Open Google Chrome </li>
<li> Navigate to personal.psu.edu/gol5047/BarTourApp/menus.html </li>
<li> The menu page should display the title "Menus", a picture of downtown State College, a
   back button in the top-left corner of the page, a home button in the top-right corner
   of the page, as well as thirty button options, one for each bar in State College. </li>
<li> Click the "Kildare's Irish Pub" button. </li>
<li> The user should be redirected to the Kildare's menu website in a new tab whose URL is given by
   http://www.kildaresirishpub.com/menu/. </li>
</ol>

---

<ol>
<li> Open Google Chrome </li>
<li> Navigate to personal.psu.edu/gol5047/BarTourApp/menus.html </li>
<li> The menu page should display the title "Menus", a picture of downtown State College, a
   back button in the top-left corner of the page, a home button in the top-right corner
   of the page, as well as thirty button options, one for each bar in State College. </li>
<li> Click the "Kildare's Irish Pub" button. </li>
<li> The user should be redirected to the Kildare's menu website in a new tab whose URL is given by
   http://www.kildaresirishpub.com/menu/. </li>
</ol>



#### Specials Page

<ol>
<li>Open Google Chrome</li>
<li> Navigate to personal.psu.edu/gol5047/BarTourApp/specials.html</li>
<li>The menu page should display the title "Specials", a picture of downtown State College, a
   back button in the top-left corner of the page, a home button in the top-right corner
   of the page, as well as thirty button options, one for each bar in State College.</li>
<li>Click the back button in the top-left corner of the page.</li>
<li>The main page should be displayed again with the main page URL.</li>
</ol>

---

<ol>
<li>Open Google Chrome</li>
<li> Navigate to personal.psu.edu/gol5047/BarTourApp/specials.html</li>
<li>The menu page should display the title "Specials", a picture of downtown State College, a
   back button in the top-left corner of the page, a home button in the top-right corner
   of the page, as well as thirty button options, one for each bar in State College.</li>
<li>Click the menu button in the top-right corner of the page.</li>
<li>The main page should be displayed again with the main page URL.</li>
</ol>

---

<ol>
<li>Open Google Chrome</li>
<li> Navigate to personal.psu.edu/gol5047/BarTourApp/specials.html</li>
<li>The menu page should display the title "Specials", a picture of downtown State College, a
   back button in the top-left corner of the page, a home button in the top-right corner
   of the page, as well as thirty button options, one for each bar in State College.</li>
<li>Click the "Kildare's Irish Pub" button.</li>
<li>The user should be redirected to a special info page displaying specials for Kildare's Irish Pub.</li>
</ol>

---

<ol>
<li>Open Google Chrome</li>
<li> Navigate to personal.psu.edu/gol5047/BarTourApp/specials.html</li>
<li>The menu page should display the title "Specials", a picture of downtown State College, a
   back button in the top-left corner of the page, a home button in the top-right corner
   of the page, as well as thirty button options, one for each bar in State College.</li>
<li>Click the "Kildare's Irish Pub" button.</li>
<li>The user should be redirected to a special info page displaying specials for Kildare's Irish Pub.</li>
</ol>

---


#### Route Page

<ol>
<li>Open Google Chrome </li>
<li>Navigate to personal.psu.edu/gol5047/BarTourApp/route.html</li>
<li>The menu page should display the title "Bar Tour Route", a picture of downtown State College, a back button in the top-left corner of the page, a home button in the top-right corner of the page, a map displaying the State College area, a "Start" button that brings up a dropdown list allowing selection of one of the local establishments, a "Midpoints" button which brings up a checklist of local establishments, a "End" button that brings up a dropdown list allowing selection of one of the local establishments, and a "Calculate Route" button that returns a route of selected establishments on the map below.</li>
<li>Click the back button in the top-left corner of the page.</li>
<li>The main page should be displayed again with the main page URL.</li>
</ol>

---

<ol>
<li>Open Google Chrome </li>
<li>Navigate to personal.psu.edu/gol5047/BarTourApp/route.html</li>
<li>The menu page should display the title "Bar Tour Route", a picture of downtown State College, a back button in the top-left corner of the page, a home button in the top-right corner of the page, a map displaying the State College area, a "Start" button that brings up a dropdown list allowing selection of one of the local establishments, a "Midpoints" button which brings up a checklist of local establishments, a "End" button that brings up a dropdown list allowing selection of one of the local establishments, and a "Calculate Route" button that returns a route of selected establishments on the map below.</li>
<li>Click the home button in the top-right corner of the page.</li>
<li>The main page should be displayed again with the main page URL.</li>
</ol>

---

<ol>
<li>Open Google Chrome </li>
<li>Navigate to personal.psu.edu/gol5047/BarTourApp/route.html</li>
<li>The menu page should display the title "Bar Tour Route", a picture of downtown State College, a back button in the top-left corner of the page, a home button in the top-right corner of the page, a map displaying the State College area, a "Start" button that brings up a dropdown list allowing selection of one of the local establishments, a "Midpoints" button which brings up a checklist of local establishments, a "End" button that brings up a dropdown list allowing selection of one of the local establishments, and a "Calculate Route" button that returns a route of selected establishments on the map below.</li>
<li>Click the "Start" button and select Bar Bleu.</li>
<li>Click the "Midpoints" button and select Cafe 210 West and Indigo.</li>
<li>Click the black button in the top left of the checkbox to finalize your selection of the midpoints.
<li>Click the "End" button and select Mad Mex</li>
<li>Click the "Calculate Route" button.</li>
<li>A route displaying the shortest distane beginning at Bar Bleu and ending at Mad Mex while also visiting Cafe 210 West and Indigo will display on the map below.</li>
</ol>

---

#### Special Info Pages

<ol>
<li>Open Google Chrome</li>
<li>Navigate to personal.psu.edu/gol5047/BarTourApp/specials.html</li>
<li>The menu page should display the title "Specials", a picture of downtown State College, a
   back button in the top-left corner of the page, a home button in the top-right corner
   of the page, as well as thirty button options, one for each bar in State College.</li>
<li>Click the "Adam's Apple" button.</li>
<li>The user should be redirected to a special info page displaying specials for Adam's Apple
   whose URL is given by personal.psu.edu/gol5047/BarTourApp/specialinfo.html?1.</li>
<li>Click the back button in the top-left corner of the page.</li>
<li>The specials page should be displayed again with the main page URL.</li>
</ol>

---

<ol>
<li>Open Google Chrome</li>
<li>Navigate to personal.psu.edu/gol5047/BarTourApp/specials.html</li>
<li>The menu page should display the title "Specials", a picture of downtown State College, a
   back button in the top-left corner of the page, a home button in the top-right corner
   of the page, as well as thirty button options, one for each bar in State College.</li>
<li>Click the "Adam's Apple" button.</li>
<li>The user should be redirected to a special info page displaying specials for Adam's Apple
   whose URL is given by personal.psu.edu/gol5047/BarTourApp/specialinfo.html?1.</li>
<li>Click the home button in the top-right corner of the page.</li>
<li>The main page should be displayed again with the main page URL.</li>
</ol>

---

#### Ratings Page

<ol>
<li>Open Google Chrome</li>
<li>Navigate to personal.psu.edu/gol5047/BarTourApp/ratings.html</li>
<li>The menu page should display the title "Bar Ratings", a picture of downtown State College, a
   back button in the top-left corner of the page, a home button in the top-right corner
   of the page, as well as a list of thirty bars and their ratings, taken from Yelp.</li>
<li>Click the Home button in the top-right corner of the page.</li>
<li>The user should be redirected to the home page whose URL is given by http://personal.psu.edu/gol5047/BarTourApp/index.html</li>
</ol>

---

<ol>
<li>Open Google Chrome</li>
<li>Navigate to personal.psu.edu/gol5047/BarTourApp/ratings.html</li>
<li>The menu page should display the title "Bar Ratings", a picture of downtown State College, a
   back button in the top-left corner of the page, a home button in the top-right corner
   of the page, as well as a list of thirty bars and their ratings, taken from Yelp.</li>
<li>Click the back button in the top-left corner of the page.</li>
<li>The user should be redirected to the home page whose URL is given by http://personal.psu.edu/gol5047/BarTourApp/index.html.</li>
</ol>

---

<ol>
<li>Open Google Chrome</li>
<li>Navigate to personal.psu.edu/gol5047/BarTourApp/ratings.html</li>
<li>The menu page should display the title "Bar Ratings", a picture of downtown State College, a
   back button in the top-left corner of the page, a home button in the top-right corner
   of the page, as well as a list of thirty bars and their ratings, taken from Yelp.</li>
<li>Click the "Adam's Apple" button.</li>
<li>The user should be redirected to a ratings page displaying reviews for Adam's Apple
   whose URL is given by http://personal.psu.edu/gol5047/BarTourApp/ratings.html.</li>
</ol>

---

###Unit Tests

Let all of the following unit test cases be preceded by the following Javascript code:
<pre><code>xmlhttp=new XMLHttpRequest();                  //HTTP request object
xmlhttp.open("GET","bar-info.xml",false);
xmlhttp.send();
xmlDoc=xmlhttp.responseXML;                    //XML document object
bar=xmlDoc.getElementsByTagName("Record");     //array of bar objects
</pre></code>

---

<pre><code>console.log(bar.length);</pre></code>

Desired output from the console: <pre><code>31</pre></code>

Actual output from the console: <pre><code>31</pre></code>

---

<pre><code>console.log(xmlDoc.getElementsByTagName("Record")[1].childNodes[ROW_INDEX].getAttribute("bar_name"));</pre></code>

Desired output from the console: <pre><code>Adam's Apple</pre></code>

Actual output from the console: <pre><code>Adam's Apple</pre></code>

---

<pre><code>console.log(xmlDoc.getElementsByTagName("Record")[1]);</pre></code>

Desired output from the console:
<pre><code>&lt;Record&gt;
&lt;Row bar_name= "Adam's Apple"
monday= "none"
tuesday= "$1.00 off Captain Morgan Drinks until Midnight"
wednesday= "$1.00 off Bacardi Drinks, Ottos beers $3.50, $.50 off all house wines by the glass, $1.00 off Bartenders Choice Wine by the glass"
thursday= "$5.75 Yuengling Lager Pitchers 5:30 - 7:30 and 10:00 - midnight, Corona Bottles $3.00, $1.00 off House Tequilla drinks"
friday= "None"
saturday= "None"
sunday= "None"
daily_specials= "None"
happy_hour= "None"
address= "220 East College Ave, State College, PA, 16801"
menu= "http://www.thetavern.com/menu/#adams"
yelp= "the-tavern-restaurant-state-college"&gt;&lt;/Row&gt;
&lt;/Record&gt;</pre></code>

Actual output from the console:
<pre><code>&lt;Record&gt;
&lt;Row bar_name= "Adam's Apple"
monday= "none"
tuesday= "$1.00 off Captain Morgan Drinks until Midnight"
wednesday= "$1.00 off Bacardi Drinks, Ottos beers $3.50, $.50 off all house wines by the glass, $1.00 off Bartenders Choice Wine by the glass"
thursday= "$5.75 Yuengling Lager Pitchers 5:30 - 7:30 and 10:00 - midnight, Corona Bottles $3.00, $1.00 off House Tequilla drinks"
friday= "None"
saturday= "None"
sunday= "None"
daily_specials= "None"
happy_hour= "None"
address= "220 East College Ave, State College, PA, 16801"
menu= "http://www.thetavern.com/menu/#adams"
yelp= "the-tavern-restaurant-state-college"&gt;&lt;/Row&gt;
&lt;/Record&gt;</pre></code>

---

<pre><code>console.log(xmlDoc.getElementsByTagName("Record")[1].childNodes[ROW_INDEX].getAttribute("daily_specials"));</pre></code>

Desired output from the console: <pre><code>None</pre></code>

Actual output from the console: <pre><code>None</pre></code>

---

<pre><code>console.log(xmlDoc.getElementsByTagName("Record")[1].childNodes[ROW_INDEX].getAttribute("menu"));</pre></code>

Desired output from the console: <pre><code>http://www.thetavern.com/menu/#adams</pre></code>

Actual output from the console: <pre><code>http://www.thetavern.com/menu/#adams</pre></code>

---

<pre><code>console.log(xmlDoc.getElementsByTagName("Record")[1].childNodes[ROW_INDEX].getAttribute("yelp"));</pre></code>

Desired output from the console: <pre><code>the-tavern-restaurant-state-college</pre></code>

Actual output from the console: <pre><code>the-tavern-restaurant-state-college</pre></code>

---

<pre><code>console.log(xmlDoc.getElementsByTagName("Record")[18].childNodes[ROW_INDEX].getAttribute("address"));</pre></code>

Desired output from the console: <pre><code>220 East College Ave, State College, PA 16801</pre></code>

Actual output from the console: <pre><code>220 East College Ave, State College, PA 16801</pre></code>

---

<pre><code>console.log(xmlDoc.getElementsByTagName("Record")[18].childNodes[ROW_INDEX].getAttribute("bar_name"));</pre></code>

Desired output from the console: <pre><code>Lion's Den</pre></code>

Actual output from the console: <pre><code>Lion's Den</pre></code>

---

<pre><code>console.log(xmlDoc.getElementsByTagName("Record")[18]);</pre></code>

Desired output from the console:
<pre><code>&lt;Record&gt;
&lt;Row bar_name= "Lion's Den"
monday= "None"
tuesday= "10PM-Midnight: $2 U-Call-Itz"
wednesday= "10PM-Midnight: 1/2 price mix drinks and shots"
thursday= "10PM-Midnight: 1/2 price mix drinks and shots"
friday= "DJ at 9pm, 10PM-Midnight: 1/2 price mix drinks and shots"
saturday= "DJ, 10PM-Midnight: 1/2 price mix drinks and shots"
sunday= "None"
daily_specials= "All day, every day specials: $6 Smirnoff flavor pitchers, $6 Long Island Iced Tea Pitchers, $3 Bacardi colas, $3 Long Island Iced Teas, $2 16oz. Bud Light bottles, $2 SoCo Lime shots"
happy_hour= "None"
address= "118 South Garner St, State College, PA, 16801"
menu= "https://www.facebook.com/lionsdenpsu"
yelp= "lions-den-state-college"&gt;&lt;/Row&gt;
&lt;/Record&gt;</pre></code>

Actual output from the console:
<pre><code>&lt;Record&gt;
&lt;Row bar_name= "Lion's Den"
monday= "None"
tuesday= "10PM-Midnight: $2 U-Call-Itz"
wednesday= "10PM-Midnight: 1/2 price mix drinks and shots"
thursday= "10PM-Midnight: 1/2 price mix drinks and shots"
friday= "DJ at 9pm, 10PM-Midnight: 1/2 price mix drinks and shots"
saturday= "DJ, 10PM-Midnight: 1/2 price mix drinks and shots"
sunday= "None"
daily_specials= "All day, every day specials: $6 Smirnoff flavor pitchers, $6 Long Island Iced Tea Pitchers, $3 Bacardi colas, $3 Long Island Iced Teas, $2 16oz. Bud Light bottles, $2 SoCo Lime shots"
happy_hour= "None"
address= "118 South Garner St, State College, PA, 16801"
menu= "https://www.facebook.com/lionsdenpsu"
yelp= "lions-den-state-college"&gt;&lt;/Row&gt;
&lt;/Record&gt;</pre></code>

---

<pre><code>console.log(xmlDoc.getElementsByTagName("Record")[18].childNodes[ROW_INDEX].getAttribute("wednesday"));</pre></code>

Desired output from the console:
<pre><code>10PM-Midnight: 1/2 price mix drinks and shots</pre></code>
Actual output from the console:
<pre><code>10PM-Midnight: 1/2 price mix drinks and shots</pre></code>

---

<pre><code>console.log(xmlDoc.getElementsByTagName("Record")[18].childNodes[ROW_INDEX].getAttribute("daily_specials"));</pre></code>

Desired output from the console:
<pre><code>All day, every day specials: $6 Smirnoff flavor pitchers, $6 Long Island Iced Tea Pitchers, $3 Bacardi colas, $3 Long Island Iced Teas, $2 16oz. Bud Light bottles, $2 SoCo Lime shots</pre></code>
Actual output from the console:
<pre><code>All day, every day specials: $6 Smirnoff flavor pitchers, $6 Long Island Iced Tea Pitchers, $3 Bacardi colas, $3 Long Island Iced Teas, $2 16oz. Bud Light bottles, $2 SoCo Lime shots</pre></code>

---

<pre><code>console.log(xmlDoc.getElementsByTagName("Record")[18].childNodes[ROW_INDEX].getAttribute("menu"));</pre></code>

Desired output from the console: <pre><code>https://www.facebook.com/lionsdenpsu</pre></code>

Actual output from the console: <pre><code>https://www.facebook.com/lionsdenpsu</pre></code>

---

<pre><code>console.log(xmlDoc.getElementsByTagName("Record")[18].childNodes[ROW_INDEX].getAttribute("yelp"));</pre></code>

Desired output from the console: <pre><code>lions-den-state-college</pre></code>

Actual output from the console: <pre><code>lions-den-state-college</pre></code>

---

<pre><code>console.log(xmlDoc.getElementsByTagName("Record")[18].childNodes[ROW_INDEX].getAttribute("address"));</pre></code>

Desired output from the console: <pre><code>118 South Garner St, State College, PA 16801</pre></code>

Actual output from the console: <pre><code>118 South Garner St, State College, PA 16801</pre></code>

---

<pre><code>console.log(xmlDoc.getElementsByTagName("Record")[18].childNodes[ROW_INDEX].getAttribute("bar_name"));</pre></code>

Desired output from the console: <pre><code>Sharkies Bar and Thrifty Bottle</pre></code>

Actual output from the console: <pre><code>Sharkies Bar and Thrifty Bottle</pre></code>

---

<pre><code>console.log(xmlDoc.getElementsByTagName("Record")[18]);</pre></code>

Desired output from the console:
<pre><code>&lt;Record&gt;
&lt;Row bar_name= "Sharkies Bar and Thrifty Bottle"
monday= "$2 Budweiser 12 oz bottles"
tuesday= "Kansas City Ice Water"
wednesday= "$3 glass, $9 pitcher Sam Adams Octoberfest draft"
thursday= "$2 glass, $6 pitcher Yuengling Lager draft"
friday= "Free pool until 7, $2 Miller Light 16oz poly bottle, $3 Hammerhead teas 8-midnight"
saturday= "$2 Bud Light Platinum 12oz bottles, $3.75 Frenzy drinks 8-midnight"
sunday= "$2 glass, $6 pitcher Bud Light draft"
daily_specials= "$1.50 PBR bottles, Lionshead bottles, $2 Miller Lite draft, $2 Labatt Blue bottles, $2.50 Bud Light bottles"
happy_hour= "$5-8 Monday, 8-10 Tuesday Wednesday Thursday, 5-7 Friday, 8-11 Sunday"
address= "110 Sowers St, State College, PA, 16801"
menu= "https://www.facebook.com/Sharkies110"
yelp= "sharkies-bar-and-thrifty-bottle-shop-state-college"&gt;&lt;/Row&gt;
&lt;/Record&gt;</pre></code>

Actual output from the console:
<pre><code>&lt;Record&gt;
&lt;Row bar_name= "Sharkies Bar and Thrifty Bottle"
monday= "$2 Budweiser 12 oz bottles"
tuesday= "Kansas City Ice Water"
wednesday= "$3 glass, $9 pitcher Sam Adams Octoberfest draft"
thursday= "$2 glass, $6 pitcher Yuengling Lager draft"
friday= "Free pool until 7, $2 Miller Light 16oz poly bottle, $3 Hammerhead teas 8-midnight"
saturday= "$2 Bud Light Platinum 12oz bottles, $3.75 Frenzy drinks 8-midnight"
sunday= "$2 glass, $6 pitcher Bud Light draft"
daily_specials= "$1.50 PBR bottles, Lionshead bottles, $2 Miller Lite draft, $2 Labatt Blue bottles, $2.50 Bud Light bottles"
happy_hour= "$5-8 Monday, 8-10 Tuesday Wednesday Thursday, 5-7 Friday, 8-11 Sunday"
address= "110 Sowers St, State College, PA, 16801"
menu= "https://www.facebook.com/Sharkies110"
yelp= "sharkies-bar-and-thrifty-bottle-shop-state-college"&gt;&lt;/Row&gt;
&lt;/Record&gt;</pre></code>

---

<pre><code>console.log(xmlDoc.getElementsByTagName("Record")[18].childNodes[ROW_INDEX].getAttribute("wednesday"));</pre></code>

Desired output from the console:
<pre><code>$3 glass, $9 pitcher Sam Adams Octoberfest draft</pre></code>
Actual output from the console:
<pre><code>$3 glass, $9 pitcher Sam Adams Octoberfest draft</pre></code>

---

<pre><code>console.log(xmlDoc.getElementsByTagName("Record")[18].childNodes[ROW_INDEX].getAttribute("daily_specials"));</pre></code>

Desired output from the console:
<pre><code>$1.50 PBR bottles, Lionshead bottles, $2 Miller Lite draft, $2 Labatt Blue bottles, $2.50 Bud Light bottles</pre></code>
Actual output from the console:
<pre><code>$1.50 PBR bottles, Lionshead bottles, $2 Miller Lite draft, $2 Labatt Blue bottles, $2.50 Bud Light bottles</pre></code>

---

<pre><code>console.log(xmlDoc.getElementsByTagName("Record")[18].childNodes[ROW_INDEX].getAttribute("menu"));</pre></code>

Desired output from the console:
<pre><code>https://www.facebook.com/Sharkies110</pre></code>

Actual output from the console:
<pre><code>https://www.facebook.com/Sharkies110</pre></code>

---

<pre><code>console.log(xmlDoc.getElementsByTagName("Record")[18].childNodes[ROW_INDEX].getAttribute("yelp"));</pre></code>

Desired output from the console: <pre><code>sharkies-bar-and-thrifty-bottle-shop-state-college</pre></code>

Actual output from the console: <pre><code>sharkies-bar-and-thrifty-bottle-shop-state-college</pre></code>

---

<pre><code>console.log(xmlDoc.getElementsByTagName("Record")[18].childNodes[ROW_INDEX].getAttribute("address"));</pre></code>

Desired output from the console: <pre><code>110 Sowers St, State College, PA 16801</pre></code>

Actual output from the console: <pre><code>110 Sowers St, State College, PA 16801</pre></code>

---

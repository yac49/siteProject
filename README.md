# site project

## Description

Welcome to this "site" project! This repository houses the codebase for a demo for school website. This project includes various sections such as "about," "announcement," "apply," "course," "faculty," "food," "intern," "other," "student," and "titles."

## Table of Contents

- [Before Getting Started](#Before_Getting_Started)
- [Project Structure](#Project_Structure)
- [Features](#features)

## Before Getting Started

To get started, make sure you have the environment to handle php.
Recommend to install XAMPP for this.

### Set Up SQL

1. Run sql file:
   You can run the `tbtodo.sql` to set up the sql for this project.
2. Verification: Connect the sql with `sqlconnect.php`. Modify file to fit current condition.

## Project Structure

The project structure is organized as follows:

### Static Pages

These contents are hard-coded. Based on .html in the folder.

- about: Contains information about the institution, including HTML files and images.
- course: Provides details about courses, including HTML files and potential additional content.
- student: Covers information relevant to students, including HTML files and various document types.
- intern: Offers details about internship opportunities, including files and potential videos.
- other: Includes miscellaneous information such as a calendar, maps, and additional content.

### Dynamic Pages

These contents are fetched from sql.

- announcement: Displays announcements
- apply: Manages application-related data and information.
- faculty: Displays faculty members with their respective images and details.
- food: Features information about food options with accompanying images.

### Includes

Header and footer for every page.

- title page: Manages the header and footer components of the web pages.

### Features

Basically, there are two functions that make this site works.
One for static pages, the other for dynamic ones.

### Static Pages

From `script.js` in every folder, the operation of update page contents based on two function. The `showData()`and `infoList` onclick, which add a `selected` class after list element was selected.

```javascript
document.addEventListener("DOMContentLoaded", function () {
  //infoList stands for the list on the left in .php files.
  var infoList = document.getElementById("infoList");
  //dataDisplay show the selected information.
  var dataDisplay = document.getElementById("dataDisplay");

  // Determine the selectedInfo based on the URL parameter
  var urlParams = new URLSearchParams(window.location.search);
  var selectedInfo = urlParams.get("item") || "info1";

  showData(selectedInfo);

  //When click, add "selected" to give list element selected effect.
  infoList.addEventListener("click", function (event) {
    var listItems = infoList.getElementsByTagName("li");

    for (var i = 0; i < listItems.length; i++) {
      listItems[i].classList.remove("selected");
    }

    if (event.target.tagName === "LI") {
      // Add a class to highlight the selected info
      event.target.classList.add("selected");

      // Get the info value from the selected LI's onclick attribute
      var infoValue = event.target
        .getAttribute("onclick")
        .match(/'([^']+)'/)[1];

      // Update the URL parameter without reloading the page
      history.pushState({}, "", "?item=" + infoValue);
    }
  });
});
```

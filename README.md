# siteProject

## Description

Welcome to this site project! This repository houses the codebase for a demo for school website. his project includes various sections such as "about," "announcement," "apply," "course," "faculty," "food," "intern," "other," "student," and "titles."

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
2. Verification: Connect the sql with `sqlconnect.php`

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

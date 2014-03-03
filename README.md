# Student Org Template

# Intro

Hi, thanks for reading! I’ll go through the site’s basic structure and expected behaviors in this document. I’ll also explain what each include and template file should do.

**Social Media Settings**

Each website should have general site setting fields that contain links to the org’s social media outlets to be used in a few areas of the site. These outlets can include the organization’s: 

* Facebook Page

* Twitter Page

* Instagram Page

* Tumblr Page

* Others as they shift in and out of popularity

# Site Structure

The homepage is the most prominent and important part of the site. Instead of navigating to news or event sections in the site, they should be redirected to the respective area on the homepage. This makes it possible to provision a "barebones" site without any secondary and tertiary pages (events or news).

The homepage can accommodate up to *five* content sections including the hero section. 

## Required Sections

The following sections are required for all sites and cannot be rearranged from their default order. Some of their big headers can be renamed, but it must be noted that changing their header titles **_will not_**** ****_change the text of their navigation elements in the righthand navigation._**** **Those will always be "home", “info”, “events”, “news”, and “photos.”

* * *


### Hero Section

Section Template File: **includes/sections/hero.php**

Styles: **scss/imports/_hero.scss**

Content: 

* **Photo** - This section contains a large group or representative photo of the organization. This photo should be editable in the CMS, but Marketing and Design will provide the image.

* **Tagline/Purpose Statement** - Short tagline that explains the organization’s purpose. Editable.

* **Up to ****_two_**** buttons that can be modified by the organization** - These buttons can link to a section on the homepage, a news page, an event page, or an external site (like an OrgSync sign up page)

* **Social Media Buttons** - Button links to the social media outlets defined in the Social Media Settings. This part of the template uses the foundation iconset for the social media outlets.

* * *


### Info + News Section

This section contains some general information about the org, external resources, and more timely stuff like news or Facebook posts.

Section Template File: **includes/sections/about.php**

Styles: **scss/imports/_about.scss**

Content: 

* **Big Header Text** - This can be edited by the org website manager, but should default to " “Info." If this is customized, the header text should be eye-catching and fun.

* **Left Column Text - **This text is completely customizable by the org website manager and should be able to contain links and button styles for linking to signup forms and other websites. This column is primarily for general info and content explaining the organization and how to join it. 

* **Right Column - **The right column can have any *one* of the following (each option is commented out, but all are available in the included template files):

    1. **News Posts** - Latest news posts that live within the site itself (only if the news section has been enabled). This option is mainly available for organizations that prefer not to use a social media outlet for their news or don’t have social media. This is the default option.

    2. **Facebook Page Feed** - This will use an iframe version of a Facebook Page’s "Like Box" with a light/dark option selected from the Facebook API as appropriate.

    3. **Twitter Feed** - This uses the iframe version of the organization’s Twitter feed.

* * *


## Optional Sections

The following sections can be re-ordered based on their importance/relevance to the organization. They are also completely optional and a site can be "provisioned" without them.

* * *


### Photos

This section shows a feed of the latest uploaded photos and a navigation option on the right to see more photo galleries.

Section Template File: **includes/sections/photos.php**

Styles: **scss/imports/_photos.scss**

Content:

* **Big Header Text** - The default should be "Latest Photos" or “Photos” but can be editable by the website manager if they want something a little more catchy.

* **Left Column - **This big slider will show the last five or so photos uploaded to any album.

* **Right Column - **This will contain cover images and links for up to six of the last galleries uploaded.

The photos section will also include a link to an archive page of all galleries that have been published by the organization. More on these later.

* * *


### Events

Section Template File: **includes/sections/events.php**

Styles: **scss/imports/_events.scss**

Content: 

* This section will show *all* upcoming events in a grid with a link to each event’s single page display.

* The bottom of the page will contain a link to past events in the form of an event archive.

* * *


### News

Section Template File: **includes/sections/news.php**

Styles: **scss/imports/_news.scss**

Content:

* This section will show *six* of the latest news items  in a grid with a link to each news item’s single page display.

* The bottom of the page will contain a link to the news archive.

* * *


## Galleries + Archives

The photos, events, and news sections all have links to their respective "archives". These archives should be a paginated grid list of items that looks nearly identical to the views of their respective sections on the home page.

Photo Gallery Archive Template: **photo-gallery-list.php**

News Archive Template: **news-archive.php**

Event Archive Template: **event-archive.php**

## Single Event + News Pages

The photos, events, and news sections and archives will link to individual pages that contain the full view of their content. 

* A photo gallery page will show a grid view of all photos in the gallery. 

    * Template: **gallery.php**

* A news page will show the content of the news post with events and more news in the sidebar.

    * Template: **news-page.php**

* An event page will be very similar to a news page.

    * Template: **events-page.php**

## Footer

The footer should contain the Division of Student Life logo with the tagline from the hero section repeated below it. 

The middle column should contain links to the Facebook and/or Twitter pages from the site settings. 

The content in the right column may change depending on the wishes of the sponsors of this project but it will be uniform across all student org sites.

# TypeKit + Fonts

In the template file includes/**top.php **we embedded our TypeKit <script> tags that contain links to fonts that are *required* for this site to look like it’s supposed to. There are line heights, margins, etc that depend heavily on the correct font being used.

We have some specific restrictions on that particular kit included in the template file but if you have your own TypeKit account, please ensure the following fonts and weights are included in your kit:

* Proxima Nova Condensed

    * Light

    * Semibold

* Proxima Novaa

    * Regular

    * Regular Italic

    * Bold

# SASS Stylesheets and Color Options

Most of the "action" as far as global styles happens in **scss/app.scss** -- this file imports all of the dependencies including Zurb Foundation and our custom settings for it, our division bar styles, and each section of the site’s styles, and importantly: the chosen color option.

There are *seven* total color options for student organizations. They can be found in **scss/options/light **and **scss/options/dark/ **

These files determine the body background colors and accent colors used throughout the template. In **app.scss**, only one of these options should be imported.

We’ve pre-compiled several versions of **app.scss **in the **css/ **folder that corresponds with each color option that can be imported. Below is an example of an org’s default light style. We’d prefer that these color options be retained and offered as is via separate CMS themes or a parent/child themes.

## Example: **scss/options/light/org.scss**

//The body’s background color -- used throughout templates and for the sidenav.

$body-bg: white;

//The common font color used throughout the site.

$body-font-color: #222;

//An appropriate gray and gold that fit with the body’s background

$gray: #f2f2f2;

$gold: #ffce2f;

//The org’s chosen color and a secondary color (almost always gold)

$primary-color: #60adbd;

$secondary-color: $gold;

# Additional Notes

## Image Sizes

We’ve attempted to design this template in such a way that the images associated with the news posts, events, and photo galleries should be accommodated regardless of their dimensions or ratio. 

There might be issues with some extremely small or tall images however. It might be a good idea to enable some autocropping in the CMS template files to ensure that these images look okay.

## Known Issues

### IE8 Support

We’re using the Foundation 5 framework, which has minimal support for IE 8 and below. This is a conscious decision on our part because we believe the target audience for these websites will not be restricted to older web browsers.

### Subnav On Photo Gallery Pages

Currently the side navigation appears overlayed on top of a gallery light box due to a z-index error. This only becomes slightly jarring when an image has an extremely wide aspect ratio and the navigation overlaps with it.

### Subnav’s Active Class on Single Pages

When browsing to an archive, news page, event page, or a photo gallery page the subnavigation will not highlight the proper "section" (with a gold circle) until the visitor scrolls a few pixels from the top. This could be remedied with an active class being appended to the <dd> tag containing the subnav item by the CMS.

Example:

<dd data-magellan-arrival="news"** class="active"**><a href="index.php#news">News</a></dd>

## Partial File Manifest

See README-FIRST.pdf

## 


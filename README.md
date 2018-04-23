# Genrenator #
**Contributors:**      [Allison Tarr](https://github.com/allisonplus), [Chris Reynolds](https://github.com/jazzsequence), [Gary Kovar](https://github.com/binarygary)  
**Description:**       Random genre creation API.  
**Stable tag:**        1.2  
**License:**           GPLv3  
**License URI:**       http://www.gnu.org/licenses/gpl-3.0.html  

## What is this thing? ##
Genrenator is a random genre creation engine and API for all your genre-creation needs. Remember that time when you were really into west coast soultronica? Or when you were trying to name the genre to the music you were listening to and didn't realize that it was neo ambient punk? Or maybe you wanted to recall the road trip when you listened to way too much uk indie dirt? That's what the **Genrenator** is for.

## How do I use it? ##
Right now you can install this on your WordPress site and use one of the two built-in shortcodes.

`[genrenator-genre]` will give you a randomly generated genre with a Tweet button to share it on social media.  
[Demo](https://binaryjazz.us/genrenator/)

`[genrenator-story]` will give you a story/memory associated with a genre.  
[Demo](https://binaryjazz.us/genrenator-story/)

**Other shortcodes**  
`[genrenator-genre-slim]` just gives you a genre with no formatting and no social media button.  
`[genrenator-story-slim]` just gives you a story with no formatting and no social media button.
`[genrenator-count]` gives you a count of how many genres have been created to date.  

You can also access the [public Genrenator API](https://binaryjazz.us/wp-json/genrenator/v1/) on Binary Jazz. (See [documentation](https://binaryjazz.us/genrenator-api).)

## Where do these terms/phrases come from? ##
We used [Every Noise At Once](http://everynoise.com/everynoise1d.cgi?scope=all) as a base to take parts of genres from, then created internal catalogs of each genre "fragment". These catalogs are broken into `instruments`, `beats`, `adjectives`, `prefixes` and `suffixes`, `regions`, and `genres`. We also used Every Noise to inform our list of `patterns` which are used to combine the above fragments in unique ways.

## What's next for Genrenator? ##
We've built API endpoints so Genrenator can be an API used by anyone. Documentation for the API is available at [BinaryJazz.us](https://binaryjazz.us/genrenator-api). 

There's been discussion and some amount of planning about extending the API into a lorem ipsum generator that generates randomized music reviews. Before that, though, we'd like to be able to link to and share genres (see [issue #11](https://github.com/BinaryJazz/genrenator/issues/11)).

## This is awesome, how can I contribute to Genrenator? ##
Right now, the easiest way to contribute is by helping us expand and organize the list of words/phrases for genre "fragments" (the pieces that are combined to create new genres). This includes instruments, genres, adjectives, etc. We could also use more "stories". If you're ambitious, you can submit a PR and we'll be happy to review and merge it if it looks good, or provide feedback. We're sorely lacking in documentation for most functions because much of Genrenator was written in a hurry -- writing inline documentation and docblocks would be greatlly appreciated, too!

Testing the plugin locally (or via the API) is a lot of help in identifying bugs, and we're always interested in anyone who wants to help squash bugs. 😁

## Installation ##

### Manual Installation ###

1. Upload the entire `/genrenator-1` directory to the `/wp-content/plugins/` directory.
2. Activate Genrenator through the 'Plugins' menu in WordPress.

## Changelog ##

### 1.2 ###
* Now stores a running count of all genres created.
* Adds slim shortcodes for genres and stories that don't display the twitter button or paragraph formatting.
* Added a shortcode to display the number of genres created to date.

### 1.1 ###
* fixed issue where some prefixes and suffixes that were supposed to not have spaces after/before them had them. This was done by a significant refactor which included consolidating some prefixes and suffixes and adding a new fragment type called "post", which also involved adding a new set of patterns.
* added the ability to share genres and genre stories on twitter
* added the ability to link back to favorite genres and genre stories.

### 1.0 ###
* first major release.

### 0.3 ###
* added API endpoints for genres and stories.

### 0.2 ###
* Converted fragment lists into abstract classes for better extensability. 
* Finished building the initial catalog of words.
* Broke genres down into main genres and subgenres, so subgenres appear less frequently than main genres.

### 0.1 ###
* First release

## Upgrade Notice ##

### 0.1 ###
First Release

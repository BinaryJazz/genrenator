# Genrenator #
**Contributors:**      [Allison Tarr](https://github.com/allisonplus), [Chris Reynolds](https://github.com/jazzsequence), [Gary Kovar](https://github.com/binarygary)  
**Description:**       Random genre creation API.  
**Stable tag:**        0.2  
**License:**           GPLv3  
**License URI:**       http://www.gnu.org/licenses/gpl-3.0.html  

## What is this thing? ##
Genrenator is a random genre creation engine (and soon-to-be API) for all your genre-creation needs. Remember that time when you were really into west coast soultronica? Or when you were trying to name the genre to the music you were listening to and didn't realize that it was neo ambient punk? Or maybe you wanted to recall the road trip when you listened to way too much uk indie dirt? That's what the **Genrenator** is for.

## How do I use it? ##
Right now you can install this on your WordPress site and use one of the two built-in shortcodes.

`[genrenator-genre]` will give you a randomly generated genre.  
[Demo](https://binaryjazz.us/genrenator/)

`[genrenator-story]` will give you a story/memory associated with a genre.  
[Demo](https://binaryjazz.us/genrenator-story/)

## Where do these terms/phrases come from? ##
We used [Every Noise At Once](http://everynoise.com/everynoise1d.cgi?scope=all) as a base to take parts of genres from, then created internal catalogs of each genre "fragment". These catalogs are broken into `instruments`, `beats`, `adjectives`, `prefixes` and `suffixes`, `regions`, and `genres`. We also used Every Noise to inform our list of `patterns` which are used to combine the above fragments in unique ways.

## What's next for Genrenator? ##
The next step is building out API endpoints so Genrenator can be an API used by anyone. We plan on having endpoints for each of the options (story and genre) and may make it so multiple genres can be returned on request.

After that, there's been discussion about extending the API into a lorem ipsum generator that generates randomized music reviews.

## This is awesome, how can I contribute to Genrenator? ##
Right now, the easiest way to contribute is by helping us expand and organize the list of words/phrases for genre "fragments" (the pieces that are combined to create new genres). This includes instruments, genres, adjectives, etc. We could also use more "stories". If you're ambitious, you can submit a PR and we'll be happy to review and merge it if it looks good, or provide feedback. We're sorely lacking in documentation for most functions because much of Genrenator was written in a hurry -- writing inline documentation and docblocks would be greatlly appreciated, too!


## Installation ##

### Manual Installation ###

1. Upload the entire `/genrenator-1` directory to the `/wp-content/plugins/` directory.
2. Activate Genrenator through the 'Plugins' menu in WordPress.

## Changelog ##

### 0.2 ###
* Converted fragment lists into abstract classes for better extensability. 
* Finished building the initial catalog of words.
* Broke genres down into main genres and subgenres, so subgenres appear less frequently than main genres.

### 0.1 ###
* First release

## Upgrade Notice ##

### 0.1 ###
First Release

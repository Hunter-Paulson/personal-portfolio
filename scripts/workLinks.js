"use strict";

let links = ["portfolio.php", "capstone.php", "movie.php"];
let strings = ["Portfolio", "Capstone", "Movie"];
let currentLink = null;
let currentString= null;

if( $('body.portfolio-page') ) {
    currentLink = links[0];
    currentString = strings[0];
} else if ( $('body.capstone-page') ) {
    currentLink = links[1];
    currentString = strings[1];
} else if ( $('body.movie-page') ) {
    currentLink = links[2];
    currentString = strings[2];
}

$('#next-button').on('click', () => { nextProject() } );
$('#prev-button').on('click', () => { prevProject() } );

function nextProject() {
    console.log('next');
    // let nextText = strings(currentString + 1);
    // let nextHref = links(currentLink + 1);
    // $('#next-button').html = `<a id='next-button' href='${nextHref}'>' ${nextText} '</a>`;
}

function prevProject() {
    console.log('prev');
    let prevText = strings(currentString - 1);
    let prevHref = links(currentLink - 1);
    $('#next-button').html = `<a id='prev-button' href='${prevHref}'>' ${prevText} '</a>`;
}
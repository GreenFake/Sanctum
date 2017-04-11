$(document).ready(function() {
    $('#personal_table').tableFilterable({
        filters: [{
            filterSelector: '#filter_name',  // selector of the filter controle (may be an input element)
            event: 'onclick',            // event that fire the filter
            filterCallback: function($tr, filterValue) { // callback wich determine if a row is shown or not
                return  $tr.children().first().text().toLowerCase().indexOf(filterValue) != -1;
            },
            delay: 100 // Optional, delay in ms after which the event is fire.
        }],
        // onFilterFinished: function(nbRowShown, nbRowsTotal) { //Optional, callback called at the end of filter process
        //     $('#num_media').text(nbRowShown+"/"+nbRowsTotal); // display the number of rows shown and the total
        // }
    });
});
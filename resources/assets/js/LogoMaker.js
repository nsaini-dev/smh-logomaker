function LogoMaker () {


    var $fontOptions = $('.section-font-family .option');
    var $fontWeightOptions = $('.section-font-weight .option');

    var $logoText = $('.logo-text');



    _.each($fontOptions, function(item){
        let $item = $(item);
        let $font = $item.data('font');
        
        $item.css('font-family', $font);

        $item.on('click', function(e) {
            $item.siblings().removeClass('selected');
            $item.addClass('selected');
            $logoText.css('font-family', $font);
        });
    });

    _.each($fontWeightOptions, function(item){
        let $item = $(item);
        let $weight = $item.data('weight');
        
        $item.css('font-weight', $weight);

        $item.on('click', function(e) {
            $item.siblings().removeClass('selected');
            $item.addClass('selected');
            $logoText.css('font-weight', $weight);
        });
    });

    $("#colorpicker").spectrum({
        color: "#e69b3e",
        flat: false,
        clickoutFiresChange: false,
        showPalette: false,
        palette: [ ],
        selectionPalette: ["#e69b3e", "red", "green", "blue"],
        maxSelectionSize: 4,
        change: function(color) {
            console.log(color.toHexString());
            $logoText.css('color', color.toHexString());
        }
    });

}

export default LogoMaker;
function createSlug() {
    let title = $("#title").val();
    $("#slug").val(string_to_slug(title));
}


function string_to_slug(str) {
    str = str.trim(); // Trim whitespace
    str = str.toLowerCase();

    // Replace accents and special characters
    var from = "àáäâãèéëêìíïîòóöôõùúüûñç";
    var to = "aaaaaeeeeiiiiooooouuuunc";
    for (var i = 0, l = from.length; i < l; i++) {
        str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
    }

    str = str.replace(/[^a-z0-9 -]/g, '') // Remove invalid chars
        .replace(/\s+/g, '-')        // Replace spaces with -
        .replace(/-+/g, '-');        // Collapse dashes

    return str;
}
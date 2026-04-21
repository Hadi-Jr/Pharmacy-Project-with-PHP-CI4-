var basicRating;
document.querySelector("#basic-rater") && (basicRating = raterJs({
    starSize: 22,
    rating: 1,
    element: document.querySelector("#basic-rater"),
    rateCallback: function(e, t) {
        this.setRating(e), t()
    }
}));

document.querySelector("#basic-rater2") && (basicRating = raterJs({
    starSize: 22,
    rating: 1,
    element: document.querySelector("#basic-rater2"),
    rateCallback: function(e, t) {
        this.setRating(e), t()
    }
}));

document.querySelector("#basic-rater3") && (basicRating = raterJs({
    starSize: 22,
    rating: 1,
    element: document.querySelector("#basic-rater3"),
    rateCallback: function(e, t) {
        this.setRating(e), t()
    }
}));

document.querySelector("#basic-rater4") && (basicRating = raterJs({
    starSize: 22,
    rating: 1,
    element: document.querySelector("#basic-rater4"),
    rateCallback: function(e, t) {
        this.setRating(e), t()
    }
}));

document.querySelector("#basic-rater5") && (basicRating = raterJs({
    starSize: 22,
    rating: 1,
    element: document.querySelector("#basic-rater5"),
    rateCallback: function(e, t) {
        this.setRating(e), t()
    }
}));
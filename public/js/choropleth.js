var basic_choropleth = new Datamap({
  element: document.getElementById("basic_choropleth"),
  projection: 'mercator',
  fills: {
    defaultFill: "#ABDDA4",
    authorHasTraveledTo: "#fa0fa0"
  },
  data: {
    USA: { fillKey: "authorHasTraveledTo" },
    JPN: { fillKey: "authorHasTraveledTo" },
    ITA: { fillKey: "authorHasTraveledTo" },
    CRI: { fillKey: "authorHasTraveledTo" },
    KOR: { fillKey: "authorHasTraveledTo" },
    DEU: { fillKey: "authorHasTraveledTo" },
  }
});

basic_choropleth.bubbles([
  {
    city: 'New York',
    name: "Mark",
    comment: "Just toted sweet pair of basketball shoes!",
    radius: 15,
    country: 'USA',
    fillKey: 'USA',
    date: '2015-07-21',
    latitude: 40.7,
    longitude: -74.0
  },{
    city: 'Orlando',
    name: "Frank",
    comment: "Who's totin?",
    radius: 5,
    country: 'USA',
    fillKey: 'Orlando',
    date: '2015-07-22',
    latitude: 28.4,
    longitude: -81.3
  },
  {
    city: 'Los Angeles',
    name: "John",
    comment: "Can't wait to get my products from Europe!",
    radius: 8,
    yeild: 50000,
    country: 'USA',
    fillKey: 'LA',
    date: '2015-07-22',
    latitude: 37,
    longitude: -122
  }
], {
  popupTemplate: function(geo, data) {
    return '<div class="hoverinfo"><strong>' + data.name + "</strong>" + ': ' + data.comment + ' ('  + data.city + ", " + data.date + ")</div>";
  }
});

var colors = d3.scale.category10();

window.setInterval(function() {
  basic_choropleth.updateChoropleth({
    USA: colors(Math.random() * 10),
    RUS: colors(Math.random() * 100),
    AUS: { fillKey: 'authorHasTraveledTo' },
    BRA: colors(Math.random() * 50),
    CAN: colors(Math.random() * 50),
    ZAF: colors(Math.random() * 50),
    IND: colors(Math.random() * 50),
  });
}, 2000);
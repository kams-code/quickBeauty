/**
* Theme: Moltran Admin Template
* Author: Coderthemes
* Module/App: Dashboard
*/


!function($) {
    "use strict";

    var Dashboard = function() {
        this.$body = $("body")
        this.$realData = []
    };

    //creates plot graph
    Dashboard.prototype.createPlotGraph = function(selector, data1, labels, colors, borderColor, bgColor) {
      //shows tooltip
      function showTooltip(x, y, contents) {
        $('<div id="tooltip" class="tooltipflot">' + contents + '</div>').css({
          position: 'absolute',
          top: y + 5,
          left: x + 5
        }).appendTo("body").fadeIn(200);
      }

      $.plot($(selector),
          [ { data: data1,
            label: labels[0],
            color: colors[0]
          }
        ],
        {
            series: {
               lines: {
              show: true,
              fill: true,
              lineWidth: 1,
              fillColor: {
                colors: [ { opacity: 0.2 },
                          { opacity: 0.9 }
                        ]
              }
            },
            points: {
              show: true
            },
            shadowSize: 0
            },
            legend: {
            position: 'nw'
          },
          grid: {
            hoverable: true,
            clickable: true,
            borderColor: borderColor,
            borderWidth: 0,
            labelMargin: 10,
            backgroundColor: bgColor
          },
          yaxis: {
            min: 0,
            max: 15,
            color: 'rgba(0,0,0,0)'
          },
          xaxis: {
            color: 'rgba(0,0,0,0)'
          },
          tooltip: true,
          tooltipOpts: {
              content: '%s: Value of %x is %y',
              shifts: {
                  x: -60,
                  y: 25
              },
              defaultTheme: false
          }
      });
    },
    //end plot graph

        //initializing various charts and components
        Dashboard.prototype.init = function() {
          //plot graph data
          var uploads = [[0, 9], [1, 8], [2, 5], [3, 8], [4, 5], [5, 14], [6, 10]];
          var downloads = [[0, 5], [1, 12], [2,4], [3, 3], [4, 12], [5, 11], [6, 14]];
          var plabels = ["Visits"];
          var pcolors = ['#29b6f6'];
          var borderColor = '#fff';
          var bgColor = '#fff';
          this.createPlotGraph("#website-stats", uploads, plabels, pcolors, borderColor, bgColor);
        },

    //init Dashboard
    $.Dashboard = new Dashboard, $.Dashboard.Constructor = Dashboard
    
}(window.jQuery),

//initializing Dashboard
function($) {
    "use strict";
    $.Dashboard.init()
}(window.jQuery);



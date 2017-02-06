DB_CircleGauge=function()
{
	this.element=null;
};

DB_CircleGauge.prototype.render=function(element) {

	element=$(element).get(0);

	this.element=element;
	$(element).find('.circle').circleProgress({
		size: 210,
		thickness: 20,
		value: element.getAttribute('data-value'),
		startAngle: Math.PI/-2+1.6,
		reverse: true,
		fill: {
			gradient: ["green", "orange"]
		}
	});
};

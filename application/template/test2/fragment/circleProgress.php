<style id="jsbin-css">

</style>


<db-panel>
    <property name="title">
        Circle progress test
    </property>
    <property name="icon">fa-bar-chart-o</property>

    <property name="content">


        <div class="col-lg-6 col-md-6">
            <db-circlegauge>
                <property name="title">Hélo</property>
                <property name="content">€ ici ça marche héhéhé</property>
                <property name="value">0.75</property>
                <property name="image">tavares.jpg</property>
            </db-circlegauge>
        </div>


        <div class="col-lg-6 col-md-6">
            <db-circlegauge>
                <property name="title">Ça marche</property>
                <property name="content">€ ici ça marche héhéhé</property>
                <property name="value">0.56</property>
                <property name="image">juniac.jpg</property>
            </db-circlegauge>
        </div>


    </property>
</db-panel>





<script>

    $('.circleGraph').each(function(index, element) {


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
    });


</script>
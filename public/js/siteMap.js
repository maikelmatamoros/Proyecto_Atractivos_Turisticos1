const drawMap = () =>{

    var nodes = new vis.DataSet([
        {
            id: 1,
            shape: 'text',
            label: 'Inicio',
            url: '?controlador=Default'
        },
        {
            id: 2,
            shape: 'text',
            label: '¿Quiénes somos?',
            url: '?controlador=AboutUs&accion=showAboutUsView'
        },
        {
            id: 3,
            shape: 'text',
            label: 'Atractivos',
            url: '?controlador=Atractivo&accion=showAtractivoView'
        },
        {
            id: 4,
            shape: 'text',
            label: 'Alojamiento',
            url: '?controlador=Hotel&accion=showHotelView'
        },
        {
            id: 5,
            shape: 'text',
            label: 'Rent a Car',
            url: '?controlador=RentACar&accion=showRentACarView'
        },
        {
            id: 6,
            shape: 'text',
            label: 'Consejos de Viaje',
            url: '?controlador=TipsDeViaje&accion=showTipsDeViajeView'
        },
        {
            id: 7,
            shape: 'text',
            label: 'Galería',
            url: '?controlador=Gallery&accion=showGalleryView'
        }
    ]);
    var edges = new vis.DataSet([
        {from: 1, to: 2},
        {from: 1, to: 3},
        {from: 1, to: 4},
        {from: 1, to: 5},
        {from: 1, to: 6},
        {from: 1, to: 7}
    ]);

    // create a network
    var container = document.getElementById('graph');
    var data = {
        nodes: nodes,
        edges: edges
    };

    var options = {
        autoResize: true,
        height: '100%',
        width: '100%',
        nodes: {
            borderWidth: 0,
            size: 42,
            color: {
                border: '#222',
                background: 'transparent'
            },
            font: {
                color: '#111',
                face: 'Walter Turncoat',
                size: 16,
                strokeWidth: 1,
                strokeColor: '#222'
            }
        },
        edges: {
            color: {
                color: '#CCC',
                highlight: '#A22'
            },
            width: 3,
            length: 275,
            hoverWidth: .05
        }
    }

    var network = new vis.Network(container, data, options);

    network.on("selectNode", function (params) {
        if (params.nodes.length === 1) {
            var node = nodes.get(params.nodes[0]);
            window.open(node.url, '_self');
        }
    });

};

document.addEventListener("DOMContentLoaded",()=>{
    document.getElementById("mapa").addEventListener('click', (e)=> {
        drawMap();
    });
})


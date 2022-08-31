require("./index.css");
var $hPUfP$reactjsxruntime = require("react/jsx-runtime");
var $hPUfP$reactdom = require("react-dom");
var $hPUfP$react = require("react");
var $hPUfP$reactrouterdom = require("react-router-dom");
require("bootstrap/dist/css/bootstrap.css");








const $8c11273c67482c2b$export$25cb5e0d682c2d3b = (props)=>{
    const handleClick = ()=>{};
    console.log(props);
    return /*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsxs)((0, $hPUfP$reactjsxruntime.Fragment), {
        children: [
            /*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsxs)("div", {
                children: [
                    "Liste",
                    /*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsx)((0, $hPUfP$reactrouterdom.Link), {
                        className: "btn btn-secondary",
                        to: "/add",
                        children: "Add"
                    })
                ]
            }),
            /*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsx)("br", {}),
            props.data.map((disc, index)=>/*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsxs)("div", {
                    className: "p-1 col-12 col-lg-6 d-flex align-items-center",
                    children: [
                        /*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsx)("img", {
                            className: "card-img-left img-thumbnail rounded-circle w-25",
                            src: "https://127.0.0.1:8000/img/" + disc.picture
                        }),
                        /*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsx)("br", {}),
                        /*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsxs)("div", {
                            className: "offset-1 text-center",
                            children: [
                                disc.title,
                                /*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsx)("br", {}),
                                disc.label,
                                /*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsx)("br", {})
                            ]
                        })
                    ]
                }, index))
        ]
    });
};





const $577de8d91ec1d2a6$export$1965bc4402591c3 = (props)=>{
    const [disc, setDisc] = (0, $hPUfP$react.useState)({
        title: "",
        picture: "",
        label: "",
        artist: ""
    });
    const navigate = (0, $hPUfP$reactrouterdom.useNavigate)();
    const handleChange = (evt)=>{
        let d = {
            ...disc
        };
        d[evt.target.name] = evt.target.value;
        setDisc(d);
    };
    const handleSubmit = (evt)=>{
        props.onChange(disc);
        navigate("/");
    };
    return /*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsxs)((0, $hPUfP$reactjsxruntime.Fragment), {
        children: [
            /*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsx)("div", {
                children: "Formulaire"
            }),
            /*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsxs)("fieldset", {
                children: [
                    /*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsx)("legend", {
                        children: "New Disc"
                    }),
                    /*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsx)("input", {
                        className: "form-control mx-2",
                        type: "text",
                        name: "title",
                        value: disc.title,
                        onChange: handleChange,
                        placeholder: "Title"
                    }),
                    /*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsx)("br", {}),
                    /*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsx)("input", {
                        className: "form-control mx-2",
                        type: "text",
                        name: "picture",
                        value: disc.picture,
                        onChange: handleChange,
                        placeholder: "Picture"
                    }),
                    /*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsx)("br", {}),
                    /*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsx)("input", {
                        className: "form-control mx-2",
                        type: "text",
                        name: "label",
                        value: disc.label,
                        onChange: handleChange,
                        placeholder: "Label"
                    }),
                    /*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsx)("br", {}),
                    /*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsx)("input", {
                        className: "form-control mx-2",
                        type: "text",
                        name: "artist",
                        value: disc.artist.name,
                        onChange: handleChange,
                        placeholder: "Artist"
                    }),
                    /*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsx)("br", {}),
                    /*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsx)("button", {
                        className: "btn btn-secondary mx-2",
                        onClick: handleSubmit,
                        children: "Submit"
                    }),
                    /*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsx)((0, $hPUfP$reactrouterdom.Link), {
                        className: "btn btn-secondary",
                        to: "/",
                        children: "Retour"
                    })
                ]
            })
        ]
    });
};



async function $4e5d6173ae88e34b$export$8946d631417d8ced(uri, method, body = null) {
    const response = await fetch(uri, {
        method: method,
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json"
        },
        body: body ? JSON.stringify(body) : null
    });
    const data = await response.json();
    return data;
}




const $6cbaa71c519f2caa$export$86fbec116b87613f = (props)=>{
    const [data1, setData] = (0, $hPUfP$react.useState)([]);
    (0, $hPUfP$react.useEffect)(()=>{
        (0, $4e5d6173ae88e34b$export$8946d631417d8ced)("https://127.0.0.1:8000/api/discs", "get").then((data)=>setData(data));
    }, []);
    const handleChange = (disc)=>{
        (0, $4e5d6173ae88e34b$export$8946d631417d8ced)("https://127.0.0.1:8000/api/discs", "post", disc).then(()=>{
            (0, $4e5d6173ae88e34b$export$8946d631417d8ced)("https://127.0.0.1:8000/api/discs", "get").then((data)=>setData(data));
        });
    };
    console.log("render App...");
    return /*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsxs)((0, $hPUfP$reactrouterdom.BrowserRouter), {
        children: [
            /*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsx)("div", {
                children: "App"
            }),
            /*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsxs)((0, $hPUfP$reactrouterdom.Routes), {
                children: [
                    /*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsx)((0, $hPUfP$reactrouterdom.Route), {
                        path: "/",
                        element: /*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsx)((0, $8c11273c67482c2b$export$25cb5e0d682c2d3b), {
                            data: data1
                        })
                    }),
                    /*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsx)((0, $hPUfP$reactrouterdom.Route), {
                        path: "add",
                        element: /*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsx)((0, $577de8d91ec1d2a6$export$1965bc4402591c3), {
                            onChange: handleChange
                        })
                    })
                ]
            })
        ]
    });
};


const $d3928351bb4a0237$var$app = document.getElementById("app");
// const root = createRoot(app);
(0, $hPUfP$reactdom.render)(/*#__PURE__*/ (0, $hPUfP$reactjsxruntime.jsx)((0, $6cbaa71c519f2caa$export$86fbec116b87613f), {}), $d3928351bb4a0237$var$app);



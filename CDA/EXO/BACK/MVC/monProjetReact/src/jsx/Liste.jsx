import { useState, useEffect } from 'react';
import { Link } from 'react-router-dom';

const Liste = (props) => {


    const handleClick = () => {
        
    }
    console.log(props)
    return (
        <>
            <div>
                Liste
                <Link className='btn btn-secondary' to="/add">Add</Link>
            </div><br></br>
            {
                props.data.map( (disc, index) => 
                    <div className="p-1 col-12 col-lg-6 d-flex align-items-center" key={index}>
                        <img className="card-img-left img-thumbnail rounded-circle w-25"  src={'https://127.0.0.1:8000/img/' + disc.picture} /><br></br>
                        <div className="offset-1 text-center">
                            {disc.title}<br></br>
                            {disc.label}<br></br>
                        </div>
                    </div>
                )
            }
        </>
    );
}

export { Liste };
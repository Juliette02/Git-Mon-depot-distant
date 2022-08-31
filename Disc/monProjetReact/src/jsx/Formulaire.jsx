import { useState, useEffect } from "react";
import { Link, useNavigate } from 'react-router-dom';

const Formulaire = (props) => {

    const [disc, setDisc] = useState(
        {
            title: "",
            picture: "",
            label: "",
            artist: ""
        }
    );
    const navigate = useNavigate();

    const handleChange = (evt) => {
        let d = {...disc};
        d[evt.target.name] = evt.target.value;
        setDisc(d);
    }

    const handleSubmit = (evt) => {
        props.onChange(disc);

        navigate('/');
    }

    return (
        <>
            <div>
                Formulaire
            </div>
            <fieldset>
                <legend>New Disc</legend>
                <input className='form-control mx-2' type='text' name='title' value={disc.title} onChange={handleChange} placeholder='Title' /><br></br>
                <input className='form-control mx-2' type='text' name='picture' value={disc.picture} onChange={handleChange} placeholder='Picture' /><br></br>
                <input className='form-control mx-2' type='text' name='label' value={disc.label} onChange={handleChange} placeholder='Label' /><br></br>
                <input className='form-control mx-2' type='text' name='artist' value={disc.artist.name} onChange={handleChange} placeholder='Artist' /><br></br>
                <button className='btn btn-secondary mx-2' onClick={handleSubmit}>Submit</button>                
                <Link className='btn btn-secondary' to="/">Retour</Link>
            </fieldset>
        </>
    )

}

export { Formulaire };
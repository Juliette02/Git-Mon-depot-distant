import { useState, useEffect } from 'react';
import { Liste } from './Liste';
import { Formulaire } from './Formulaire';
import { BrowserRouter, Routes, Route } from 'react-router-dom';

import { fetchSync } from './fetchSync';

import 'bootstrap/dist/css/bootstrap.css'
import '../css/index.css';

const App = (props) => {

    const [data, setData] = useState([]);

    useEffect(() => {
        fetchSync('https://127.0.0.1:8000/api/discs', 'get')
        .then( (data) => setData(data) );}, [])
    
    const handleChange = (disc) => {
        fetchSync('https://127.0.0.1:8000/api/discs', 'post', disc)
        .then( () => {
            fetchSync('https://127.0.0.1:8000/api/discs', 'get')
            .then( (data) => setData(data) );
        });
        }
    console.log('render App...');

    return (
        <BrowserRouter>
            <Routes>
                <Route path="/" element={<Liste data={data}/>} />
                <Route path="add" element={<Formulaire onChange={handleChange} />} />
            </Routes>
        </BrowserRouter>
    )
}

export { App };
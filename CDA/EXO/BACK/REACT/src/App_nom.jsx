import {React, useState} from 'react';

/*************************************Nom Prénom********************************************/
const App = (props) => {
    // Nom, Prénom
    const [nom, setNom] = useState("");
    const [prenom, setPrenom] = useState("");
    
    // Compteur
    const [count, setCount] = useState(0);

    // Liste de course
    const [courses, setCourse] = useState(["Lait", "Beurre"]);
    const [ajout, setAjout] = useState("")

    // Nom, Prénom
    const handleChangeNom = (evt) => {
        setNom(evt.target.value);
    }
    const handleChangePrenom = (e) => {
        setPrenom(e.target.value);
    }
    
    // Compteur
    const handleCount =  () => {
        setCount(count + 1);
    }

    // Liste de course
    const handleChangeCourse = (e) => {
        setAjout(e.currentTarget.value);
        // console.log(ajout)
    }


    const handleSubmit = (e) => {
        e.preventDefault();

        const courseCopy = [...courses];

        courseCopy.push(ajout);

        setCourse(courseCopy);

    }

    return (
        <div>
            /*****************************Nom Prénom*******************************************/
            
            <div>
                <div>
                    Bonjour
                    &nbsp;
                    <span className='bolder'>
                        {nom} {prenom}
                    </span>
                </div>
                <input type="text" value={nom} onChange={handleChangeNom}/><br></br>
                <input type="text" value={prenom} onChange={handleChangePrenom}/>
            </div>
            <br></br>
            /*******************************Compteur*****************************************/
            <div>
               <span>{count}</span>
               <br></br>
               <button onClick={handleCount}>Increment</button>
            </div>
            <br></br>
            /*******************************Liste de course***************************************/
            <div>
                <br/>Liste de courses dynamique
                <ul>
                    {courses.map((produit) => (
                        <li key={produit}>
                            {produit}
                        </li>
                    ))
                    }
                </ul>
                <form onSubmit={handleSubmit}>
                    <input
                        value={ajout}
                        onChange={handleChangeCourse}
                        type="text"
                        placeholder='Ajouter un produit'
                    />
                    <button>Ajouter</button>
                </form>
            </div>

        </div>    
    );


}

export { App };
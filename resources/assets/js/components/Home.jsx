import React, { Component } from 'react';
import ReactDOM from 'react-dom';

function Home(props) {
    return <h1>Hello, {props.name}</h1>;
}

const element = <Home name="Sara" />;
ReactDOM.render(
    element,
    document.getElementById('home')
);
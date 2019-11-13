import React from 'react';
import { Router, Route } from 'react-router-dom';
import { Details } from './Details.js';
import { Movies } from './Movies.js';


const createRoutes = () => (
	<Router>
	<Route exact path='./Movies' component = {Movies} />
	<Route exact path='./Details' component = {Details} />
	</Router>
);

export default createRoutes;
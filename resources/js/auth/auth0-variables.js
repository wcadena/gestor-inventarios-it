export const AUTH_CONFIG = {
  clientId: '7l8l4KZ1ESq7cowR26nKcDxILKwQiN63',
  domain: 'https://devinventario.ecuatask.com/oautho2',
  callbackUrl: process.env.NODE_ENV === 'development' ? 'http://inventarios4.local/callback' : 'http://inventarios4.local/callback',//callbackUrl: process.env.NODE_ENV === 'development' ? 'http://localhost:8080/callback' : 'http://vuely.theironnetwork.org/callback',
  apiUrl: 'API_IDENTIFIER'
}

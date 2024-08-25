import './bootstrap';
import Alpine from 'alpinejs'
 
window.Alpine = Alpine
 
Alpine.start()

function layouting(e){
    e.target.classlist.add('pl-72')
}


import './bootstrap';
import Alpine from 'alpinejs'
import 'flowbite';
 
window.Alpine = Alpine
 
Alpine.start()

function layouting(e){
    e.target.classlist.add('pl-72')
}


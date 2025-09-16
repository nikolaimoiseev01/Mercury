import './bootstrap';
import {livewire_hot_reload} from 'virtual:livewire-hot-reload'
import Swiper from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import {Autoplay, Navigation, Pagination} from 'swiper/modules';

// Регистрация Swiper модулей
Swiper.use([Navigation, Pagination, Autoplay]);

window.Swiper = Swiper;

livewire_hot_reload();

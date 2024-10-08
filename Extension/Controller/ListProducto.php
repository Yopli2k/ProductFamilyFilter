<?php
/**
 * This file is part of ProductFamilyFilter plugin for FacturaScripts.
 * FacturaScripts      Copyright (C) 2015-2024 Carlos Garcia Gomez <carlos@facturascripts.com>
 * ProductFamilyFilter Copyright (C) 2023-2024 Jose Antonio Cuello Principal <yopli2000@gmail.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */
namespace FacturaScripts\Plugins\ProductFamilyFilter\Extension\Controller;

use Closure;
use FacturaScripts\Dinamic\Lib\ListFilter\TreeFilter;

/**
 * Extension of ListProducto Controller
 *
 * @author José Antonio Cuello Principal <yopli2000@gmail.com>
 */
class ListProducto
{
    /**
     * Create the view to display.
     *   - Change the family filter by new Tree filter.
     */
    public function createViews(): Closure
    {
        return function () {
            if (isset($this->views['ListProducto'])) {
                $view = $this->views['ListProducto'];
                $view->filters['codfamilia'] = new TreeFilter('codfamilia', 'codfamilia', 'family', 'familias', 'madre', 'codfamilia', 'descripcion', []);
            }
        };
    }
}

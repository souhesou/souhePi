<?php

namespace RefugieBundle\Controller;

use RefugieBundle\Entity\Refugie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RefugieController extends Controller
{
    public function ajoutAction(Request $request)
    {

        $c=$this->getDoctrine()->getManager();
        if($request->isMethod('POST')) {
            $nom = $request->get('nom');
            $prenom= $request->get('prenom');
                $age= $request->get('age');
                    $origine= $request->get('origine');
            $refuge=new Refugie($nom,$prenom,$age,$origine);
            $c->persist($refuge);
            $c->flush();
            return $this->redirectToRoute('ajout_Refugie');
        }return $this->render("@Refugie/Refugie/ajout.html.twig");
    }

    public function afficheAction(Request $request)
    {
        $refugie=$this->getDoctrine()->getRepository(Refugie::class)->findAll();
        return $this->render("@Refugie/Refugie/listeRefugie.html.twig",array('refugie'=>$refugie));
    }


    public function modifierAction(Request $request){

    }

}

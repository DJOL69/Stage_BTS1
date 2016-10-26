<?php

/*$refBox=$contenir_sachet->getRefBox()->getRefBox();
$contenir_sachet->setRefBox($refBox);
$refSachet=$contenir_sachet->getRefSachet()->getRefSachet();
$contenir_sachet->setRefSachet($refSachet);*/

namespace QLIO\GestionBundle\Controller;

use Symfony\Component\Form\Extension\Core\Type\FormType;

use QLIO\GestionBundle\Entity\typevis;
use QLIO\GestionBundle\Form\typevisType;
use QLIO\GestionBundle\Entity\air_picking;
use QLIO\GestionBundle\Form\air_pickingType;
use QLIO\GestionBundle\Entity\box;
use QLIO\GestionBundle\Form\boxType;
use QLIO\GestionBundle\Entity\contenir_sachet;
use QLIO\GestionBundle\Form\contenir_sachetType;
use QLIO\GestionBundle\Entity\contenir_visserie;
use QLIO\GestionBundle\Form\contenir_visserieType;
use QLIO\GestionBundle\Entity\sachet;
use QLIO\GestionBundle\Form\sachetType;
use QLIO\GestionBundle\Entity\visserie;
use QLIO\GestionBundle\Form\visserieType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;

class VisController extends Controller
{
	public function indexAction()
	{
		return $this->render ('QLIOGestionBundle:Vis:index.html.twig');
	}
	
	public function showtypevisAction(TypeVis $typevis){
		
		return $this->render('QLIOGestionBundle:Typevis:showtypevis.html.twig', array(
			'typevis' => $typevis,
		));
	
	}
	
	public function deletetypevisAction(TypeVis $typevis){
		$em = $this->getDoctrine()->getManager();
		
		$em->remove($typevis);
		$em->flush();
		
		return $this->redirect ($this->generateUrl('qlio_gestion_viewtypevis'));
	}
	
	public function edittypevisAction(TypeVis $typevis, Request $request )
	{
		$form = $this->createForm(typevisType::class, $typevis);
		
		if ($request->isMethod('POST')){
			
			$form->handleRequest($request);
			
			if($form->isValid()){
				
				$em = $this->getDoctrine()->getManager();
				$em->persist($typevis);
				$em->flush();

				return $this->redirect ($this->generateUrl("qlio_gestion_viewtypevis"));
				
			}
		}
		
		return $this->render('QLIOGestionBundle:Typevis:addtypevis.html.twig', array(
			'form' => $form->createView(),
		));
	}
	
	public function showairpickingAction(Air_Picking $airpicking){
		
		return $this->render('QLIOGestionBundle:Air_picking:showairpicking.html.twig', array(
			'airpicking' => $airpicking,
		));
	
	}
	
	public function deleteairpickingAction(Air_Picking $airpicking){
		$em = $this->getDoctrine()->getManager();
		
		$em->remove($airpicking);
		$em->flush();
		
		return $this->redirect ($this->generateUrl('qlio_gestion_viewairpicking'));
	}
	
	public function editairpickingAction(Air_Picking $airpicking, Request $request )
	{
		$form = $this->createForm(air_pickingType::class, $airpicking);
		
		if ($request->isMethod('POST')){
			
			$form->handleRequest($request);
			
			if($form->isValid()){
				
				$em = $this->getDoctrine()->getManager();
				$em->persist($airpicking);
				$em->flush();

				return $this->redirect ($this->generateUrl("qlio_gestion_viewairpicking"));
				
			}
		}
		
		return $this->render('QLIOGestionBundle:Air_picking:addairpicking.html.twig', array(
			'form' => $form->createView(),
		));
	}
	
		public function showboxAction(Box $box){
		
		return $this->render('QLIOGestionBundle:Box:showbox.html.twig', array(
			'box' => $box,
		));
	
	}
	
	public function deleteboxAction(Box $box){
		$em = $this->getDoctrine()->getManager();
		
		$em->remove($box);
		$em->flush();
		
		return $this->redirect ($this->generateUrl('qlio_gestion_viewbox'));
	}
	
	public function editboxAction(Box $box, Request $request )
	{
		$form = $this->createForm(boxType::class, $box);
		
		if ($request->isMethod('POST')){
			
			$form->handleRequest($request);
			
			if($form->isValid()){
				
				$em = $this->getDoctrine()->getManager();
				$em->persist($box);
				$em->flush();

				return $this->redirect ($this->generateUrl("qlio_gestion_viewbox"));
				
			}
		}
		
		return $this->render('QLIOGestionBundle:Box:addbox.html.twig', array(
			'form' => $form->createView(),
		));
	}
	
	public function showcontenirsachetAction(Contenir_Sachet $contenir_sachet){
		
		return $this->render('QLIOGestionBundle:Contenir_sachet:showcontenirsachet.html.twig', array(
			'contenir_sachet' => $contenir_sachet,
		));
	
	}
	
	public function deletecontenirsachetAction(Contenir_Sachet $contenir_sachet){
		$em = $this->getDoctrine()->getManager();
		
		$em->remove($contenir_sachet);
		$em->flush();
		
		return $this->redirect ($this->generateUrl('qlio_gestion_viewcontenirsachet'));
	}
	
	public function editcontenirsachetAction(Contenir_Sachet $contenir_sachet, Request $request)
	{
		$form = $this->createForm(contenir_sachetType::class, $contenir_sachet);
		
		if ($request->isMethod('POST')){
			
			$form->handleRequest($request);
			
			if($form->isValid()){
				
				$em = $this->getDoctrine()->getManager();
				$em->persist($contenir_sachet);
				$em->flush();

				return $this->redirect ($this->generateUrl("qlio_gestion_viewcontenirsachet"));
				
			}
		}
		
		return $this->render('QLIOGestionBundle:Contenir_sachet:addcontenirsachet.html.twig', array(
			'form' => $form->createView(),
		));
	}
	
	public function showcontenirvisserieAction(Contenir_Visserie $contenir_visserie){
		
		return $this->render('QLIOGestionBundle:Contenir_visserie:showcontenirvisserie.html.twig', array(
			'contenir_visserie' => $contenir_visserie,
		));
	
	}
	
	public function deletecontenirvisserieAction(Contenir_Visserie $contenir_visserie){
		$em = $this->getDoctrine()->getManager();
		
		$em->remove($contenir_visserie);
		$em->flush();
		
		return $this->redirect ($this->generateUrl('qlio_gestion_viewcontenirvisserie'));
	}
	
	public function editcontenirvisserieAction(Contenir_Visserie $contenir_visserie, Request $request )
	{
		$form = $this->createForm(contenir_visserieType::class, $contenir_visserie);
		
		if ($request->isMethod('POST')){
			
			$form->handleRequest($request);
			
			if($form->isValid()){
				
				$em = $this->getDoctrine()->getManager();
				$em->persist($contenir_visserie);
				$em->flush();

				return $this->redirect ($this->generateUrl("qlio_gestion_viewcontenirvisserie"));
				
			}
		}
		
		return $this->render('QLIOGestionBundle:Contenir_visserie:addcontenirvisserie.html.twig', array(
			'form' => $form->createView(),
		));
	}
	
	public function showsachetAction(Sachet $sachet){
		
		return $this->render('QLIOGestionBundle:Sachet:showsachet.html.twig', array(
			'sachet' => $sachet,
		));
	
	}
	
	public function deletesachetAction(Sachet $sachet){
		$em = $this->getDoctrine()->getManager();
		
		$em->remove($sachet);
		$em->flush();
		
		return $this->redirect ($this->generateUrl('qlio_gestion_viewsachet'));
	}
	
	public function editsachetAction(Sachet $sachet, Request $request )
	{
		$form = $this->createForm(sachetType::class, $sachet);
		
		if ($request->isMethod('POST')){
			
			$form->handleRequest($request);
			
			if($form->isValid()){
				
				$em = $this->getDoctrine()->getManager();
				$em->persist($sachet);
				$em->flush();

				return $this->redirect ($this->generateUrl("qlio_gestion_viewsachet"));
				
			}
		}
		
		return $this->render('QLIOGestionBundle:Sachet:addsachet.html.twig', array(
			'form' => $form->createView(),
		));
	}
	
	public function showvisserieAction(Visserie $visserie){
		
		return $this->render('QLIOGestionBundle:Visserie:showvisserie.html.twig', array(
			'visserie' => $visserie,
		));
	
	}
	
	public function deletevisserieAction(Visserie $visserie){
		$em = $this->getDoctrine()->getManager();
		
		$em->remove($visserie);
		$em->flush();
		
		return $this->redirect ($this->generateUrl('qlio_gestion_viewvisserie'));
	}
	
	public function editvisserieAction(Visserie $visserie, Request $request )
	{
		$form = $this->createForm(visserieType::class, $visserie);
		
		if ($request->isMethod('POST')){
			
			$form->handleRequest($request);
			
			if($form->isValid()){
				
				$em = $this->getDoctrine()->getManager();
				$em->persist($visserie);
				$em->flush();

				return $this->redirect ($this->generateUrl("qlio_gestion_viewvisserie"));
				
			}
		}
		
		return $this->render('QLIOGestionBundle:Visserie:addvisserie.html.twig', array(
			'form' => $form->createView(),
		));
	}
	
	public function addtypevisAction(Request $request)
	{	
		$typevis = new TypeVis();
		
		$form = $this->createForm(typevisType::class, $typevis);
		
		if ($request->isMethod('POST')){
			
			$form->handleRequest($request);
			
			if($form->isValid()){
				
				$em = $this->getDoctrine()->getManager();
				$em->persist($typevis);
				$em->flush();

				return $this->redirect ($this->generateUrl("qlio_gestion_viewtypevis"));
				
			}
		}
		
		return $this->render('QLIOGestionBundle:Typevis:addtypevis.html.twig', array(
			'form' => $form->createView(),
		));
	}
	
	public function addairpickingAction(Request $request)
	{	
		$airpicking = new Air_Picking();
		
		$form = $this->createForm(air_pickingType::class, $airpicking);
		
		if ($request->isMethod('POST')){
			
			$form->handleRequest($request);
			
			if($form->isValid()){
				
				$em = $this->getDoctrine()->getManager();
				$em->persist($airpicking);
				$em->flush();

				return $this->redirect ($this->generateUrl("qlio_gestion_viewairpicking"));
				
			}
		}
		
		return $this->render('QLIOGestionBundle:Air_Picking:addairpicking.html.twig', array(
			'form' => $form->createView(),
		));
	}
	
	public function addboxAction(Request $request)
	{	
		$box = new Box();
		
		$form = $this->createForm(boxType::class, $box);
		
		if ($request->isMethod('POST')){
			
			$form->handleRequest($request);
			
			if($form->isValid()){
				
				$em = $this->getDoctrine()->getManager();
				$em->persist($box);
				$em->flush();

				return $this->redirect ($this->generateUrl("qlio_gestion_viewbox"));
				
			}
		}
		
		return $this->render('QLIOGestionBundle:Box:addbox.html.twig', array(
			'form' => $form->createView(),
		));
	}
	
	public function addcontenirsachetAction(Request $request)
	{	
		$contenir_sachet = new Contenir_Sachet();
		
		$form = $this->createForm(contenir_sachetType::class, $contenir_sachet);
		
		if ($request->isMethod('POST')){
			
			$form->handleRequest($request);
			
			if($form->isValid()){
				
				$em = $this->getDoctrine()->getManager();
				$em->persist($contenir_sachet);
				$em->flush();

				return $this->redirect ($this->generateUrl("qlio_gestion_viewcontenirsachet"));
				
			}
		}
		
		return $this->render('QLIOGestionBundle:Contenir_sachet:addcontenirsachet.html.twig', array(
			'form' => $form->createView(),
		));
	}
	
	public function addcontenirvisserieAction(Request $request)
	{	
		$contenir_visserie = new Contenir_Visserie();
		
		$form = $this->createForm(contenir_visserieType::class, $contenir_visserie);
		
		if ($request->isMethod('POST')){
			
			$form->handleRequest($request);
			
			if($form->isValid()){
				
				$em = $this->getDoctrine()->getManager();
				$refSachet=$contenir_visserie->getRefSachet()->getRefSachet();
				$contenir_visserie->setRefSachet($refSachet);
				$em->persist($contenir_visserie);
				$em->flush();

				return $this->redirect ($this->generateUrl("qlio_gestion_viewcontenirvisserie"));
				
			}
		}
		
		return $this->render('QLIOGestionBundle:Contenir_visserie:addcontenirvisserie.html.twig', array(
			'form' => $form->createView(),
		));
	}
	
	public function addsachetAction(Request $request)
	{	
		$sachet = new Sachet();
		
		$form = $this->createForm(sachetType::class, $sachet);
		
		if ($request->isMethod('POST')){
			
			$form->handleRequest($request);
			
			if($form->isValid()){
				
				$em = $this->getDoctrine()->getManager();
				$em->persist($sachet);
				$em->flush();

				return $this->redirect ($this->generateUrl("qlio_gestion_viewsachet"));
				
			}
		}
		
		return $this->render('QLIOGestionBundle:Sachet:addsachet.html.twig', array(
			'form' => $form->createView(),
		));
	}
	
	public function addvisserieAction(Request $request)
	{	
		$visserie = new Visserie();
		
		$form = $this->createForm(visserieType::class, $visserie);
		
		if ($request->isMethod('POST')){
			
			$form->handleRequest($request);
			
			if($form->isValid()){
				
				$em = $this->getDoctrine()->getManager();
				$em->persist($visserie);
				$em->flush();

				return $this->redirect ($this->generateUrl("qlio_gestion_viewvisserie"));
				
			}
		}
		
		return $this->render('QLIOGestionBundle:Visserie:addvisserie.html.twig', array(
			'form' => $form->createView(),
		));
	}

	public function viewtypevisAction()
	{
		$em = $this->getDoctrine()->getManager();
		$typevis = $em->getRepository("QLIOGestionBundle:typevis")->findAll();
		
		return $this->render ('QLIOGestionBundle:Typevis:viewtypevis.html.twig', array(
			'typevis' => $typevis,
		));
	}
	
	public function viewairpickingAction()
	{
		$em = $this->getDoctrine()->getManager();
		$air_picking = $em->getRepository("QLIOGestionBundle:air_picking")->findAll();
		
		return $this->render ('QLIOGestionBundle:Air_Picking:viewairpicking.html.twig', array(
			'air_picking' => $air_picking,
		));
	}
	
	public function viewboxAction()
	{
		$em = $this->getDoctrine()->getManager();
		$box = $em->getRepository("QLIOGestionBundle:box")->findAll();
		
		return $this->render ('QLIOGestionBundle:Box:viewbox.html.twig', array(
			'box' => $box,
		));
	}
	
	public function viewcontenirsachetAction()
	{
		$em = $this->getDoctrine()->getManager();
		$contenir_sachet = $em->getRepository("QLIOGestionBundle:contenir_sachet")->findAll();
		
		return $this->render ('QLIOGestionBundle:Contenir_sachet:viewcontenirsachet.html.twig', array(
			'contenir_sachet' => $contenir_sachet,
		));
	}
	
	public function viewcontenirvisserieAction()
	{
		$em = $this->getDoctrine()->getManager();
		$contenir_visserie = $em->getRepository("QLIOGestionBundle:contenir_visserie")->findAll();
		
		return $this->render ('QLIOGestionBundle:Contenir_visserie:viewcontenirvisserie.html.twig', array(
			'contenir_visserie' => $contenir_visserie,
		));
	}
	
	public function viewsachetAction()
	{
		$em = $this->getDoctrine()->getManager();
		$sachet = $em->getRepository("QLIOGestionBundle:sachet")->findAll();
		
		return $this->render ('QLIOGestionBundle:Sachet:viewsachet.html.twig', array(
			'sachet' => $sachet,
		));
	}
	
	public function viewvisserieAction()
	{
		$em = $this->getDoctrine()->getManager();
		$visserie = $em->getRepository("QLIOGestionBundle:visserie")->findAll();
		
		return $this->render ('QLIOGestionBundle:Visserie:viewvisserie.html.twig', array(
			'visserie' => $visserie,
		));
	}
	
	public function viewAction()
	{
		return $this->render ('QLIOGestionBundle:Vis:view.html.twig');	
	}

	public function addAction()
	{
		return $this->render ('QLIOGestionBundle:Vis:add.html.twig');	
	}
}